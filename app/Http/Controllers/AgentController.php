<?php

namespace App\Http\Controllers;

use App\CustomCss;
use Illuminate\Http\Request;
use App\User;
use Hyn\Tenancy\Contracts\Repositories\CustomerRepository;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Environment;
use Hyn\Tenancy\Models\Customer;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Events\Websites\Updated;
use Illuminate\Support\Facades\Hash;
use App\GlobalParameter;


class AgentController extends Controller
{
    public function newSiteScript(Request $request)
    {
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $favicon = $request->favicon;
        $subname = $request->subname;
        $sitename = $request->sitename;
        $largelogo = $request->largelogo;
        $smalllogo = $request->smalllogo;
        $webclip = $request->webclip;
        $topbarColor = $request->topbar_bgcolor;
        $topbarFont = $request->topbar_fontcolor;
        $sidebarColor = $request->sidebar_bgcolor;
        $sidebarFont = $request->sidebar_fontcolor;

        if ($this->tenantExists($subname, $email)) {
            $this->error("A tenant with name '{$subname}' already exists.");
            return;
        }

        $hostname = $this->registerTenant($subname, $email);
        app(Environment::class)->hostname($hostname);
        $this->addAdmin($first_name, $last_name, $subname, $username, $email, $password);
        $this->addGlobalParameters($favicon, $sitename, $largelogo, $smalllogo, $webclip);
        $this->addCSSParameters($topbarColor, $topbarFont, $sidebarColor, $sidebarFont);
        $value = 'Website setup successfully!';
        $weburl = $subname;

        return view('master-setupcomplete', ['value'=>$value, 'weburl'=>$weburl]);
    }
    private function tenantExists($subname, $email)
    {
        return Customer::where('name', $subname)->orWhere('email', $email)->exists();
    }
    private function registerTenant($subname, $email)
    {
        $customer = new Customer;
        $customer->name = $subname;
        $customer->email = $email;
        app(CustomerRepository::class)->create($customer);
        $website = new Website;
        $website->customer()->associate($customer);
        app(WebsiteRepository::class)->create($website);
        $hostname = new Hostname;
        $baseUrl = config('app.url_base');
        $hostname->fqdn = "{$subname}.{$baseUrl}";
        $hostname->customer()->associate($customer);
        app(HostnameRepository::class)->attach($hostname, $website);
        return $hostname;
    }
    private function addAdmin($first_name, $last_name, $subname, $username, $email, $password)
    {
        $subname = $subname;
        $username = $username;
        $firstname = $first_name;
        $lastname = $last_name;
        //dd($sitefavicon);
        $admin = User::create([
            'username' => $username,
            'first_name' => $firstname,
            'last_name' => $lastname,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        return $admin;
    }

    private function addGlobalParameters($favicon, $sitename, $largelogo, $smalllogo, $webclip)
    {
        $version = GlobalParameter::create([
            'tenant_large_logo' => $largelogo,
            'tenant_small_logo' => $smalllogo,
            'tenant_favicon' => $favicon,
            'tenant_webclip' => $webclip,
            'tenant_sitename' => $sitename
        ]);
        return $version;

    }

    private function addCSSParameters($topbarColor, $topbarFont, $sidebarColor, $sidebarFont)
    {
        $stylecss = CustomCss::create([
            'topbar_bgcolor' => $topbarColor,
            'topbar_fontcolor' => $topbarFont,
            'sidebar_bgcolor' => $sidebarColor,
            'sidebar_fontcolor' => $sidebarFont
        ]);
        return $stylecss;

    }

    public function sitecreate()
    {
        return view('newsite');
    }

    public function editsite($id)
    {
        $site = Website::findOrFail($id);
        $hostname = Hostname::where('website_id', $site->id)->first();
        return view('updatesite', ['site'=>$site, 'hostname'=>$hostname]);
    }

    public function updatesite(Request $request)
    {
        $siteId = $request->site_id;
        $site = Website::findOrFail($siteId);
        Hostname::unguard();
        $hostname = tap(Hostname::where('website_id', $siteId)->first())->update(['fqdn' => $request->domainname]);
        event(new Updated($hostname->website));
        Hostname::reguard();
        dd('Success');
    }

}
