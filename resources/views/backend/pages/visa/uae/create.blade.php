@extends('backend.layouts.master')
@section('title')
UAE Visa Create
@endsection
@section('content')
<div class="row">
  <div class="card card-primary">
    <div class="card-header">
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label class="form-label">Application Date</label>
            <input type="date" name="application_date" value="" class="form-control">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label class="form-label">Reference</label>
            <input type="text" name="reference" value="" class="form-control">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label class="form-label">Visa Type</label>
            <select class="form-control" name="visa_type">
                <option value="30 Days">30 Days</option>
                <option value="60 Days">60 Days</option>
                <option value="90 Days">90 Days</option>
            </select>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label class="form-label">Source Type</label>
            <select class="form-control" name="source_type1">
                <option value=""></option>
                <option value="echannel">echannel</option>
                <option value="ABU DHABI">ABU DHABI</option>
                <option value="AUH">AUH</option>
                <option value="SHARJAH">SHARJAH</option>
                <option value="AIH">AIH</option>
                <option value="SHJ">SHJ</option>
                <option value="Dubai (DXB)">Dubai (DXB)</option>
            </select>

            <select class="form-control" name="source_type2">
                <option value="Urgent">Urgent</option>
                <option value="In Country">In Country</option>
                <option value="High Risk">High Risk</option>
                <option value="Normal">Normal</option>
                <option value="No Back/KB/Risk Free">No Back/KB/Risk Free</option>
                <option value="Renew/Extension">Renew/Extension</option>
            </select>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label class="form-label">Nationality</label>
            <input type="text" name="nationality" value="" class="form-control">
          </div>
          <div class="form-group" >
            <label class="form-label">Passport Number</label>
            <input type="text" name="passport_number" value="" class="form-control">
          </div>
          <div class="form-group">
            <label class="form-label">Gender</label>
            <select class="form-control" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" value="" class="form-control">
          </div>   
        </div>
        <div class="col-md-6">
          <div class="form-group"  style="height:100%;   border: 1px solid pink;">
            <div style="text-align:center;height:100%;">
              <i  style="position: absolute; left: 0;  right: 0; bottom:20px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Main Passport Page</i>
              <img class="main_passport_page" height="180" width="180" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute;bottom: 5px;right: 5px;">
                <a href="#" class="btn btn-info btn-sm">
                  <i class="fas fa-upload"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                <input type="hidden" id="main_passport_page_pre" name="main_passport_page_pre" value="" >
                    <input type="file"  name="main_passport_page" id="main_passport_page" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'main_passport_page');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group"> 
            <label class="form-label">Birth Country</label>
            <select type="text" class="form-control" name="birth_country">
                <option value="AD">Andorra</option>
            </select>
          </div> 
          <div class="form-group"> 
            <label class="form-label">Date of issue</label>
            <input type="date" name="date_of_issue" value="" class="form-control">
          </div>
          <div class="form-group"> 
            <label class="form-label">Expiration Date</label>
            <input type="date" name="expiration_date" value="" class="form-control">
          </div>
          <div class="form-group">
            <label class="form-label">Marital Status</label>
            <select type="text" class="form-control" name="marital_status">
              <option value=""></option>
              <option  value="Single">Single</option>
              <option  value="Married">Married</option>
              <option  value="Divorced">Divorced</option>
              <option  value="Widowed">Widowed</option>
            </select>
          </div>   
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group"> 
            <label>U.I.D. No</label>
            <input type="text" name="uid_no" id="uid_no" value="" class="form-control">
          </div> 
        </div>
        <div class="col-md-9">
          <div class="form-group" > 
            <label>Visa Comments</label>
            <textarea  name="visa_comments" id="visa_comments" class="form-control "></textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group" style="margin: 50px 0;border-top: 1px solid teal;opacity: 0.2;" > </div> 
        </div>   
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group"> 
            <label>Birth Place</label>
            <input type="text" name="birth_place" id="birth_place" value="" class="form-control" required>
            <input type="text" name="birth_place_lang2" id="birth_place_lang2" value="" class="form-control">
          </div>
        </div>
        <div class="col-md-3"> 
          <div class="form-group"> 
            <label>First Name</label>
            <input type="text" name="first_name" id="first_name" value="" class="form-control" required>
            <input type="text" name="first_name_lang2" id="first_name_lang2" value="" class="form-control">
          </div> 
        </div>
        <div class="col-md-3">
          <div class="form-group"> 
            <label>Middle Name</label>
            <input type="text" name="middle_name" id="middle_name" value="" class="form-control">
            <input type="text" name="middle_name_lang2" value="" class="form-control">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group"> 
            <label>Last Name</label>
            <input type="text" name="last_name" id="last_name" value="" class="form-control" required>
            <input type="text" name="last_name_lang2" id="last_name_lang2" value="" class="form-control">
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group"> 
            <label >Passport Issue Place</label>
            <input type="text" name="passport_issue_place" id="passport_issue_place" value="" class="form-control" required>
            <input type="text" name="passport_issue_place_lang2" id="passport_issue_place_lang2" value="" class="form-control">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group"> 
            <label>Father Name</label>
            <input type="text" name="father_name" id="father_name" value="" class="form-control" required>
            <input type="text" name="father_name_lang2"  id="father_name_lang2" value="" class="form-control" >
          </div> 
        </div>
        <div class="col-md-3">
          <div class="form-group"> 
            <label>Mother Name</label>
            <input type="text" name="mother_name" id="mother_name" value="" class="form-control" required>
            <input type="text" name="mother_name_lang2" id="mother_name_lang2" value="" class="form-control" >
          </div> 
        </div>
        <div class="col-md-3">
          <div class="form-group"> 
            <label>Husband Name</label>
            <input type="text" name="husband_name" id="husband_name" value="" class="form-control" disabled="disabled">
            <input type="text" name="husband_name_lang2" id="husband_name_lang2" value="" class="form-control" disabled="disabled">
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group"  id="" style="margin-bottom: 40px"> 
            <button type="button" class="btn btn-primary btn-translate">Translate</button>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group"> 
            <input  type="checkbox" id="passport_is_travel_document" name="passport_is_travel_document" value="passport_is_travel_document">
            <label for="passport_is_travel_document"> Passport is Travel Document</label><br>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="autocomplete form-group" style="width:300px;">
            <label>Profession</label>
            <input id="profession" type="text" name="profession" value="" class="form-control" placeholder="Profession" required>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label>Education</label>
            <select type="text" class="form-control" name="education" id="education" required>
              <option value=""></option>
              <option  value="None">None</option>
              <option  value="Primary Education">Primary Education</option>
              <option  value="Lower Secondary">Lower Secondary</option>
              <option  value="Upper Secondary">Upper Secondary</option>
              <option  value="Diploma">Diploma</option>
              <option  value="Bachelor">Bachelor</option>
              <option  value="Master">Master</option>
              <option  value="Doctoral">Doctoral</option>
            </select>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label>Language</label>
            <select type="text" class="form-control" name="language" id="language" required >
              <option  value="Arabic">Arabic</option>
            </select>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label>Group Membership</label>
            <select type="text" class="form-control" name="group_membership" id="group_membership" required>
              <option value=""></option>
              <option  value="None / Alone">None / Alone</option>
              <option  value="Family Main Person">Family Main Person</option>
              <option  value="Wife">Wife</option>
              <option  value="Son">Son</option>
              <option  value="Daughter">Daughter</option>
              <option  value="Brother">Brother</option>
              <option  value="Sister">Sister</option>
              <option  value="Father">Father</option>
              <option  value="Mother">Mother</option>
            </select>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label>Religion</label>
            <select type="text" class="form-control" name="religion" id="religion" required>
              <<option value=""></option>
              <option  value="Islam">Islam</option>
              <option  value="Christianity">Christianity</option>
              <option  value="Hinduism">Hinduism</option>
              <option  value="Non Religious">Non Religious</option>
              <option  value="Buddhism">Buddhism</option>
              <option  value="Baha'i">Baha'i</option>
              <option  value="Sikhism">Sikhism</option>
              <option  value="Judaism">Judaism</option>
              <option  value="Qadiani">Qadiani</option>
              <option  value="Others">Others</option>
            </select>
          </div> 
        </div>
        <div class="col-md-3">
          <div class="form-group"> 
            <label>Applicant Mobile</label>
            <input type="text"  id="applicant_mobile" name="applicant_mobile" value="" class="form-control" required>
          </div> 
        </div>
        <div class="col-md-3"></div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group" > 
            <label>Your Rate</label>
            <input disabled type="text" name="your_rate" id="your_rate" value="" class="form-control your_rate" placeholder="AUTO">
            <input type="hidden" name="your_rate" id="your_rate" value="" class="your_rate">
            <input type="hidden" name="left_amount" id="left_amount" value="">
          </div> 
        </div>
        <div class="col-md-3">
          <div class="form-group" style=""> 
            <label>Total</label>
            <input disabled type="text" name="total_rate" id="total_rate" value="" class="form-control total_rate" placeholder="AUTO">
            <input type="hidden" name="total_rate" id="" class="total_rate" value="">              
          </div> 
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group"  id="" > 
            <button type="button" class="btn btn-primary btn-get-rate">Get My Rate</button>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group col-md-12"  id="" style="margin-top: 40px"></div> 
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group" style="cursor:pointer;  border: 1px solid pink;">
            <div style="text-align:center">
              <i  style="position: absolute; left: 0;  right: 0; bottom:30px; margin-left: auto; margin-right: auto; width: 200px;color:#000;background:#fff;">Personal Photo</i> 
                
              <img class="personal_photo" height="200" width="200" style="width:100%;height:100%" src="https://www.airzain.com/public/assets/img/icon/upload_icon.png"  />
              <div style="position: absolute; top: 20px;right: 20px;">
                <a style="" class="btn btn-sm btn-info" onclick="getElementById('personal_photo').click()">
                  <i class="fas fa-upload"></i>
                </a> 
                <a style="" class="btn btn-sm btn-danger" id="delete-file2">
                  <i class="fas fa-trash"></i>
                </a>
              </div>
            </div>                
            <div class="input-group" style="display:none">
                <div class="custom-file">
                  <input type="hidden" name="personal_photo_pre" id="personal_photo_pre" value="" >
                    <input type="file"  name="personal_photo" id="personal_photo" accept="image/jpeg,image/gif,image/png,application/pdf,image/x-eps" onchange="changeImage(this,'personal_photo');" class="custom-file-input" id="">
                    <label class="custom-file-label" for="exampleInputFile">Beard Comb Image</label>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group div-cancel text-center" style="border: 1px solid #007bff;height: 200px;display: flex;flex-direction: column;align-items: center;justify-content: space-between;     padding-top: 20px;">
                      
            <div>
              <i style="    font-size: 30px;" class="nav-icon fas fa-clock"></i>
            </div>
            <div class="form-check"> 
            <label style="display: flex;" for="exampleInputEmail1">Waiting 
              
              <input type="radio"  name="status" id="status" value="Waiting" class="form-check-input radio-status" style="transform: scale(2);     margin-left: -30px;" required >
            
            </label>
            </div>
            <div class="div-status-desc">
              <p style="text-align: center;    font-size: 13px;"> The application will be kept in your waiting list, you may send or cancel it later.</p>
            </div>
          </div>

        </div>
        <div class="col-md-6">
          <div class="form-group div-cancel" style="border: 1px solid #007bff;height: 200px;display: flex;flex-direction: column;align-items: center;justify-content: space-between;     padding-top: 20px;">
                      
            <div>
              <i style="    font-size: 30px;" class="nav-icon fas fa-check"></i>
            </div>
            <div class="form-check"> 
            <label style="display: flex;" for="exampleInputEmail1">Send 
              <input type="radio" name="status"  value="Send" id="status" class="form-check-input radio-status" style="transform: scale(2);     margin-left: -30px;" required >
              </label>
            </div>
            <div class="div-status-desc">
              <p style="text-align: center;    font-size: 13px;"> The application will be sent for posting, you may NOT be able to change it later.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


