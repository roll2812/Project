<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use App\Traits\DeleteModelTrait;
use App\Http\Requests\AddSettingRequest;

class AdminSettingController extends Controller
{
    use DeleteModelTrait;
    public function index(Setting $setting)
    {
        $settings = Setting::latest()->paginate(5);
        return view('admin.setting.index', [
            'settings' => $settings,
        ]);
    }

    public function create()
    {
        return view('admin.setting.add');
    }

    public function store(AddSettingRequest $request, Setting $setting)
    {
        $setting->create([
            'type' => $request->type,
            'config_key' => $request->config_key,
            'config_value' => $request->config_value,
        ]);

        return redirect()->route('setting.index');
    }

    public function edit(Setting $setting)
    {
        return view('admin.setting.edit', [
            'setting' => $setting,
        ]);
    }

    public function update(Request $request, Setting $setting)
    {

        $setting->update([
            'config_key' => $request->config_key,
            'config_value' => $request->config_value,
        ]);

        return redirect()->route('setting.index');
    }

    public function delete(Setting $setting)
    {
       return $this->deleteModelTrait($setting,$setting->id);
        
    }
}
