<?php

namespace App\Http\Livewire\Admin\Employee;

use App\Models\Employee;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    
    use WithFileUploads;

    protected $listeners=['nepali_date'=>'setNepaliDate'];

    public function setNepaliDate($name,$value){
        $this->$name = $value;
    }

    public $currentStep = 1;

    public $local_langauges = [];
    public $local_langauges_i=1;

    public $foreign_langauges = [];
    public $foreign_langauges_i=1;

    public function hydrate(){
        // $this->resetValidation();
        $this->resetErrorBag();
    }

    //First step form
    public $nepali_name,$english_name,$english_reference_no,$nepali_reference_no,$photo,$work_place,$birth_date_nepali,$birth_date_english,$citizenship_no,$verified_district,$verified_date,$father_name_english,$father_name_nepali,$father_job,$grandfather_name_english,$grandfather_name_nepali,$grandfather_job,$mother_name_english,$mother_name_nepali,$mother_job,$spouce_name_english,$spouce_name_nepali,$spouce_job,$no_sons,$no_daughter;

    public function firstStepSubmit()
    {
         $this->validate([
            'nepali_name' => 'required',
            'english_name'=>'required',
            'english_reference_no'=>'required',
            'nepali_reference_no'=>'required',
            'photo'=>'required|mimes:jpeg,jpg,png|max:2000',
            'work_place'=>'required',
            'birth_date_nepali'=>'required',
            'birth_date_english'=>'required',
            'citizenship_no'=>'required',
            'verified_district'=>'required',
            'verified_date'=>'required',
            'father_name_english'=>'required',
            'father_name_nepali'=>'required',
            'father_job'=>'required',
            'verified_date'=>'required',
            'verified_date'=>'required',
            'grandfather_name_english'=>'required',
            'grandfather_name_nepali'=>'required',
            'grandfather_job'=>'required',
            'mother_name_english'=>'required',
            'mother_name_nepali'=>'required',

        ]);
        $this->currentStep = 2;
    }

    public function submitForm()
    {
        $employee  = new Employee;
      
        $this->clearForm();
        $this->currentStep = 1;
        
    }
    //Second step form
    public $permanent_state_english,$permanent_state_nepali,$permanent_district_english,$permanent_district_nepali,$permanent_munci_vdc_english,$permanent_munci_vdc_nepali,$permanent_ward_no_english,$permanent_ward_no_nepali,$permanent_tole_english,$permanent_tole_nepali,$permanent_house_no_english,$permanent_house_no_nepali,$permanent_contact_no_english,$permanent_contact_no_nepali,$permanent_email;
    
    public $same_as_permanent;
    public $temporary_state_english,$temporary_state_nepali,$temporary_district_english,$temporary_district_nepali,$temporary_munci_vdc_english,$temporary_munci_vdc_nepali,$temporary_ward_no_english,$temporary_ward_no_nepali,$temporary_tole_english,$temporary_tole_nepali,$temporary_house_no_english,$temporary_house_no_nepali,$temporary_contact_no_english,$temporary_contact_no_nepali,$temporary_email;

    public function secondStepSubmit()
    {
        $this->validate([
            'permanent_state_english'=>'required',
            'permanent_state_nepali'=>'required',
            'permanent_district_english'=>'required',
            'permanent_district_nepali'=>'required',
            'permanent_munci_vdc_english'=>'required',
            'permanent_munci_vdc_nepali'=>'required',
            'permanent_ward_no_english'=>'required',
            'permanent_ward_no_nepali'=>'required',
            'permanent_tole_english'=>'required',
            'permanent_tole_nepali'=>'required',
            'permanent_house_no_english'=>'required',
            'permanent_house_no_nepali'=>'required',
            'permanent_contact_no_english'=>'required',
            'permanent_contact_no_nepali'=>'required',
            'permanent_email'=>'required'
        ]);
        
        if(!$this->same_as_permanent){
            $this->validate([
                'temporary_state_english'=>'required',
                'temporary_state_nepali'=>'required',
                'temporary_district_english'=>'required',
                'temporary_district_nepali'=>'required',
                'temporary_munci_vdc_english'=>'required',
                'temporary_munci_vdc_nepali'=>'required',
                'temporary_ward_no_english'=>'required',
                'temporary_ward_no_nepali'=>'required',
                'temporary_tole_english'=>'required',
                'temporary_tole_nepali'=>'required',
                'temporary_house_no_english'=>'required',
                'temporary_house_no_nepali'=>'required',
                'temporary_contact_no_english'=>'required',
                'temporary_contact_no_nepali'=>'required',
                'temporary_email'=>'required'
            ]);
        }

        if($this->same_as_permanent!='1'){
            $this->temporary_state_english = $this->permanent_state_english;
            $this->temporary_state_nepali = $this->permanent_state_nepali;
            $this->temporary_district_english = $this->permanent_district_english;
            $this->temporary_district_nepali = $this->permanent_district_nepali;
            $this->temporary_munci_vdc_english = $this->permanent_munci_vdc_english;
            $this->temporary_munci_vdc_nepali = $this->permanent_munci_vdc_nepali;
            $this->temporary_ward_no_english = $this->permanent_ward_no_english;
            $this->temporary_ward_no_nepali = $this->permanent_ward_no_nepali;
            $this->temporary_tole_english = $this->permanent_tole_english;
            $this->temporary_tole_nepali = $this->permanent_tole_nepali;
            $this->temporary_house_no_english = $this->permanent_house_no_english;
            $this->temporary_house_no_nepali = $this->permanent_house_no_nepali;
            $this->temporary_contact_no_english = $this->permanent_contact_no_english;
            $this->temporary_contact_no_nepali = $this->permanent_contact_no_nepali;
            $this->temporary_email = $this->permanent_email;
        }else{
            $this->temporary_state_english = '';
            $this->temporary_state_nepali = '';
            $this->temporary_district_english = '';
            $this->temporary_district_nepali = '';
            $this->temporary_munci_vdc_english = '';
            $this->temporary_munci_vdc_nepali = '';
            $this->temporary_ward_no_english = '';
            $this->temporary_ward_no_nepali = '';
            $this->temporary_tole_english = '';
            $this->temporary_tole_nepali = '';
            $this->temporary_house_no_english = '';
            $this->temporary_house_no_nepali = '';
            $this->temporary_contact_no_english = '';
            $this->temporary_contact_no_nepali = '';
            $this->temporary_email = '';
        }

        $this->currentStep = 3;
    }

    

    //Third step form
    public $facility_holder_name_nepali,$facility_holder_name_english,$facility_holder_relation,$facility_holder_state,$facility_holder_district,$facility_holder_muncipality_vdc,$facility_holder_ward_no,$facility_holder_tole,$facility_holder_house_no,$facility_holder_citizenship_no,$facility_holder_verified_district,$facility_holder_verified_date;
    public function thirdStepSubmit()
    {
        $this->validate([
            'facility_holder_name_nepali'=>'required',
            'facility_holder_name_english'=>'required',
            'facility_holder_relation'=>'required',
            'facility_holder_state'=>'required',
            'facility_holder_district'=>'required',
            'facility_holder_muncipality_vdc'=>'required',
            'facility_holder_muncipality_vdc'=>'required',
            'facility_holder_tole'=>'required',
            'facility_holder_house_no'=>'required',
            'facility_holder_citizenship_no'=>'required',
            'facility_holder_verified_district'=>'required',
            'facility_holder_verified_date'=>'required',
        ]);
        
        $this->currentStep = 4;
    }


    //Fourth Step Form
    public $sex,$religion,$ethincity,$huliya,$blood_group,$mool,$femal,$aadhibasi_ho,$aadhibasi,$madhesi_ho,$madhesi,$dalit_ho,$dalit,$pichadiyeko_jilla_ho,$pichadiyeko_jilla,$aapangata_ho,$aapangata_kisim;

    public function fourthStepSubmit()
    {
        $this->validate([
            'sex'=>'required',
            'religion'=>'required',
            'ethincity'=>'required',
            'huliya'=>'required',
            'blood_group'=>'required',
            'mool'=>'required',
        ]);
        
        if($this->aadhibasi_ho){
            $this->validate([
                'aadhibasi'=>'required',
            ]);
        }

        if($this->madhesi_ho){
            $this->validate([
                'madhesi'=>'required',
            ]);
        }
        
        if($this->dalit_ho){
            $this->validate([
                'dalit'=>'required',
            ]);
        }

        if($this->pichadiyeko_jilla_ho){
            $this->validate([
                'pichadiyeko_jilla'=>'required',
            ]);
        }

        if($this->aapangata_ho){
            $this->validate([
                'aapangata_kisim'=>'required'
            ]);
        }
        
        $this->currentStep = 5;
    }

    //Fifth Step Form
    public $local_langauge,$local_langauge_written_skill,$local_langauge_reading_skill,$local_langauge_speaking_skill;

    public function fifthStepSubmit()
    {
        $this->validate([
            
            'local_langauge.*' => 'required',
            'local_langauge_written_skill.*' => 'required',
            'local_langauge_reading_skill.*' => 'required',
            'local_langauge_speaking_skill.*' => 'required',
        ],
        [
            'local_langauge.*.required' => 'Language required',
            'local_langauge_written_skill.*.required' => 'Written skill required',
            'local_langauge_reading_skill.*.required' => 'Reading skill required',
            'local_langauge_speaking_skill.*.required' => 'Speaking skill required',
        ]);
        $this->currentStep = 6;
    }

    //Sixth Step Form
    public $foreign_langugae,$foreign_langauge_written_skill,$foreign_langauge_reading_skill,$foreign_langauge_speaking_skill;

    //Seventh Step Form
    public $organization_name,$organization_address,$organization_niyukti_date,$organization_nirnaya_date,$organization_hajiri_date,$organization_sewa,$organization_samuha,$organization_upasamuha,$organization_shreni_taha,$organization_position,$organization_technical;

    //Eigth Step Form
    public $prev_organization_name,$prev_organization_address,$prev_organization_niyukti_date,$prev_organization_nirnaya_date,$prev_organization_hajiri_date,$prev_organization_sewa,$prev_organization_samuha,$prev_organization_upasamuha,$prev_organization_shreni_taha,$prev_organization_technical,$prev_organization_position,$prev_organization_resign_date,$prev_organization_resign_reason;

    //Nineth Step Form
    public $bahu_bibaha,$baal_bibaha,$wife_name,$is_spouce_apply_for_pr,$is_spouce_in_other_country,$country_name,$apply_date,$pending_payment_government,$reason,$experience_qualification;



    public $successMessage = '';


    public function addLocalLanguage($i)
    {
        $i = $this->local_langauges_i + 1;
        $this->local_langauges_i = $i;
        array_push($this->local_langauges ,$i);
    }

    public function removeLocalLanguage($i)
    {
        unset($this->local_langauges[$i]);
    }

    public function addForeignLanguage($i)
    {
        $i = $this->foreign_langauges_i + 1;
        $this->foreign_langauges_i = $i;
        array_push($this->foreign_langauges ,$i);
    }

    public function removeForeignLanguage($i)
    {
        unset($this->foreign_langauges[$i]);
    }

    public function sixthStepSubmit()
    {
        
        $this->currentStep = 7;
    }

    public function seventhStepSubmit()
    {
        
        $this->currentStep = 8;
    }

    public function eigthStepSubmit()
    {
        
        $this->currentStep = 9;
    }

   
    
   

    public function back($step)
    {
        $this->currentStep = $step;    
    }

    public function clearForm()
    {
        $this->name = '';
        $this->amount = '';
        $this->description = '';
        $this->stock = '';
        $this->status = 1;
    }

    public function render()
    {
        return view('livewire.admin.employee.form');
    }
}
