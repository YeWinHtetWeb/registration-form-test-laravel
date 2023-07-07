<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    // Go to Registration Form
    public function register(){
        return view('registerForm');
    }

    // Create Data (Store in DB)
    public function create(Request $request){
        $this->formValidationCheck($request);

        $data = $this->getData($request);

        //img store
        if($request->hasFile('regSs')){
            $fileName = uniqid() . $request->file('regSs')->getClientOriginalName();
            $request->file('regSs')->storeAs('public/form', $fileName);
            $data['screenshot'] = $fileName;
        }
        // dd($data);
        Form::create($data);
        return to_route('formPage#show');
    }

    //  Go to Show Page
    public function show(){
        $dataList = Form::orderBy('created_at', 'desc')->first()->toArray();
        // $dataList = Form::where('id', $id)->all()->toArray();
        // dd($dataList);
        return view('show', compact('dataList'));
    }

    // Go to Edit Page
    public function edit($id){
        $editData = Form::where('id', $id)->first()->toArray();
        // dd($editData);
        return view('edit', compact('editData'));
    }

    // Update Data
    public function update(Request $request){
        $id = $request->regId;
        // $this->formValidationCheck($request);

        $updateData = $this->getData($request);
        $updateData['id'] = $id;
        // dd($updateData);

        if($request->hasFile('regSs')){
            $oldImgName = Form::select('screenshot')->where('id', $id)->first()->toArray();
            $oldImgName = $oldImgName['screenshot'];
            // dd($oldImgName);

            if($oldImgName != null){
                Storage::delete('public/form/' . $oldImgName);
            }

            $fileName = uniqid() . '_' . $request->file('regSs')->getClientOriginalName();
            $request->file('regSs')->storeAs('public/form', $fileName);
            $updateData['screenshot'] = $fileName;
        }
        // dd($updateData);
        Form::where('id', $id)->update($updateData);
        return to_route('formPage#show');
    }

    // get Client Data
    private function getData($request){
        $data = [
            "email" => $request->regEmail,
            "name" => $request->regName,
            "fb_acc" => $request->regFb,
            "phone" => $request->regPhone,
            "job" => $request->regJob,
            "school" => $request->regSchool,
            "programming" => implode(', ', (array) $request['regLanguages']) == null ? 'none' : implode(', ', (array) $request['regLanguages']),
            "framework" => implode(', ', (array) $request['regFrames']) == null ? 'none' : implode(', ', (array) $request['regFrames']),
            "web" => implode(', ', (array) $request['regWebs']) == null ? 'none' : implode(', ', (array) $request['regWebs']),
            "class" => implode(', ', (array) $request['regClass']),
            "payment" => implode(', ', (array) $request['regPaid']),
            "amount" => $request->regAmount,
            "screenshot" => $request->regSs
        ];
        return $data;
    }

    // form validation check
    private function formValidationCheck($request){
        $validationRules = [
            'regName' => 'required',
            'regEmail' => 'required|unique:forms,email,' . $request['id'],
            'regFb' => 'required',
            'regPhone' => 'required',
            'regJob' => 'required',
            'regSchool' => 'required',
            'regClass' => 'required',
            'regPaid' => 'required',
            'regAmount' => 'required',
            'rule' => 'required'
        ];

        $validationMessage = [
            'regName.required' => "*နာမည်အပြည့်အစုံ ဖြည့်သွင်းရန်လိုအပ်ပါသည်။",
            // 'regName.min' => "စာလုံးရေ ၅ လုံးပြည့်အောင် ဖြည့်သွင်းရန်လိုအပ်ပါသည်။",
            'regEmail.required' => "*email အပြည့်အစုံ ဖြည့်သွင်းရန်လိုအပ်ပါသည်။",
            'regEmail.unique' => "*အသုံးပြုပြီးသား email ဖြစ်နေပါသဖြင့်ပြောင်းလဲဖြည့်သွင်းပါ။",
            'regFb.required' => "*facebook acc link ဖြည့်သွင်းရန်လိုအပ်ပါသည်။",
            'regPhone.required' => "*phone number ဖြည့်သွင်းရန်လိုအပ်ပါသည်။",
            'regJob.required' => "*job field ဖြည့်သွင်းရန်လိုအပ်ပါသည်။",
            'regSchool.required' => "*school field ဖြည့်သွင်းရန်လိုအပ်ပါသည်။",
            'regClass.required' => "*class အမျိုးအစားဖြည့်သွင်းရန်လိုအပ်ပါသည်။",
            'regPaid.required' => "*ငွေပေးချေမှုအမျိုးအစား ရွေးရန်လိုအပ်ပါသည်။",
            'regAmount.required' => "*ငွေပမာဏ ဖြည့်သွင်းရန်လိုအပ်ပါသည်။",
            'rule.required' => "*စည်းကမ်းများလိုက်နာရန် လိုအပ်ပါသည်။"
        ];

        Validator::make($request->all(), $validationRules, $validationMessage)->validate();
    }
}
