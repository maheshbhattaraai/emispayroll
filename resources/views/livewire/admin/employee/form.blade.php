<div>
        <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">
            <div class="col-md-12">
                <h3>Employee Info</h3>
                <div class="row">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="title">Nepali Name:</label>
                            <input type="text" wire:model="nepali_name" class="form-control" @error('nepali_name') autofocus @enderror/>
                            @error('nepali_name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">English Name:</label>
                            <input type="text" wire:model="english_name" class="form-control" />
                            @error('english_name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">English Reference No:</label>
                            <input type="text" wire:model="english_reference_no" class="form-control"/>
                            @error('english_reference_no') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Nepali Reference No:</label>
                            <input type="text" wire:model="nepali_reference_no" class="form-control"/>
                            @error('nepali_reference_no') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Work Place:</label>
                            <input type="text" wire:model="work_place" class="form-control"/>
                            @error('work_place') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                    <div  class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Birth Date Nepali:</label>
                            <input  type="text" wire:model.defer="birth_date_nepali" id="nepali-datepicker" class="nepali-datepicker form-control" value="" />
                            @error('birth_date_nepali') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Birth Date English:</label>
                            <input type="date" wire:model.defer="birth_date_english" min="1900-01-01" max="2099-12-31"  class="form-control"/>
                            @error('birth_date_english') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Citizenship No:</label>
                            <input type="text" wire:model="citizenship_no" class="form-control"/>
                            @error('citizenship_no') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Verified District:</label>
                            <input type="text" wire:model="verified_district" class="form-control"/>
                            @error('verified_district') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Verified Date:</label>
                            <input type="text" wire:model.defer="verified_date" class="form-control" id="citizenship_verified_date_employee"/>
                            @error('verified_date') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Father Name English:</label>
                            <input type="text" wire:model="father_name_english" class="form-control"/>
                            @error('father_name_english') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Father Name Nepali:</label>
                            <input type="text" wire:model="father_name_nepali" class="form-control"/>
                            @error('father_name_nepali') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Father Job:</label>
                            <input type="text" wire:model="father_job" class="form-control"/>
                            @error('father_job') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Grand Father Name English:</label>
                            <input type="text" wire:model="grandfather_name_english" class="form-control"/>
                            @error('grandfather_name_english') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Grand Father Name Nepali:</label>
                            <input type="text" wire:model="grandfather_name_nepali" class="form-control"/>
                            @error('grandfather_name_nepali') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Grand Father Job:</label>
                            <input type="text" wire:model="grandfather_job" class="form-control"/>
                            @error('grandfather_job') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Mother Name English:</label>
                            <input type="text" wire:model="mother_name_english" class="form-control"/>
                            @error('mother_name_english') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Mother Name Nepali:</label>
                            <input type="text" wire:model="mother_name_nepali" class="form-control"/>
                            @error('mother_name_nepali') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Mother Job:</label>
                            <input type="text" wire:model="mother_job" class="form-control"/>
                            @error('mother_job') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Spouce Name English:</label>
                            <input type="text" wire:model="spouce_name_english" class="form-control"/>
                            @error('spouce_name_english') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Spouce Name Nepali:</label>
                            <input type="text" wire:model="spouce_name_nepali" class="form-control"/>
                            @error('spouce_name_nepali') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">Spouce Job:</label>
                            <input type="text" wire:model="spouce_job" class="form-control"/>
                            @error('spouce_job') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">No of Sons:</label>
                            <input type="number" min='0' wire:model="no_sons" class="form-control"/>
                            @error('no_sons') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <div class="form-group">
                            <label for="description">No of Daughter:</label>
                            <input type="number" min='0' wire:model="no_daughter" class="form-control"/>
                            @error('no_daughter') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="description">Photo:</label>
                    <input type="file" wire:model="photo" class="form-control"/>
                    @if(isset($photo))
                        <img src="{{$photo->temporaryUrl()}}" alt="/" style="width:100px; height:100px;">
                    @endif
                    @error('photo') <span class="error">{{ $message }}</span> @enderror
                </div>
                

                <button class="btn btn-primary nextBtn btn-sm pull-right" wire:click="firstStepSubmit" type="button" >Next</button>

            </div>

        </div>

        <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">

            <div class="col-md-12">

                <div class="col-md-12">

                    <h3> Address Info</h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="title">Permanent State Nepali:</label>
                                <input type="text" wire:model="permanent_state_nepali" class="form-control" />
                                @error('permanent_state_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent State English:</label>
                                <input type="text" wire:model="permanent_state_english" class="form-control" />
                                @error('permanent_state_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent District Nepali:</label>
                                <input type="text" wire:model="permanent_district_nepali" class="form-control"/>
                                @error('permanent_district_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent District English:</label>
                                <input type="text" wire:model="permanent_district_english" class="form-control"/>
                                @error('permanent_district_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent VDC/MUNCI English:</label>
                                <input type="text" wire:model="permanent_munci_vdc_english" class="form-control"/>
                                @error('permanent_munci_vdc_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent VDC/MUNCI Nepali:</label>
                                <input type="text" wire:model="permanent_munci_vdc_nepali" class="form-control"/>
                                @error('permanent_munci_vdc_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent Ward No English:</label>
                                <input type="text" wire:model="permanent_ward_no_english" class="form-control"/>
                                @error('permanent_ward_no_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent Ward No Nepali:</label>
                                <input type="text" wire:model="permanent_ward_no_nepali" class="form-control"/>
                                @error('permanent_ward_no_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent Tole English:</label>
                                <input type="text" wire:model="permanent_tole_english" class="form-control"/>
                                @error('permanent_tole_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent Tole Nepali:</label>
                                <input type="text" wire:model="permanent_tole_nepali" class="form-control"/>
                                @error('permanent_tole_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent House No English:</label>
                                <input type="text" wire:model="permanent_house_no_english" class="form-control"/>
                                @error('permanent_house_no_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent House No Nepali:</label>
                                <input type="text" wire:model="permanent_house_no_nepali" class="form-control"/>
                                @error('permanent_house_no_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent Contact No English:</label>
                                <input type="text" wire:model="permanent_contact_no_english" class="form-control"/>
                                @error('permanent_contact_no_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent Contact No Nepali:</label>
                                <input type="text" wire:model="permanent_contact_no_nepali" class="form-control"/>
                                @error('permanent_contact_no_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Permanent Email:</label>
                                <input type="text" wire:model="permanent_email" class="form-control"/>
                                @error('permanent_email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="mr-sm-2 mb-3">
                                <input wire:model='same_as_permanent' type="checkbox"  id="checkbox0" value="1">
                                <label for="checkbox0"> Same As Permanent</label>
                            </div>
                        </div>
                        
                        @if($same_as_permanent!=1)
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="title">Temporary State Nepali:</label>
                                <input type="text" wire:model="temporary_state_nepali" class="form-control" />
                                @error('temporary_state_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary State English:</label>
                                <input type="text" wire:model="temporary_state_english" class="form-control" />
                                @error('temporary_state_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary District Nepali:</label>
                                <input type="text" wire:model="temporary_district_nepali" class="form-control"/>
                                @error('temporary_district_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary District English:</label>
                                <input type="text" wire:model="temporary_district_english" class="form-control"/>
                                @error('temporary_district_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary VDC/MUNCI English:</label>
                                <input type="text" wire:model="temporary_munci_vdc_english" class="form-control"/>
                                @error('temporary_munci_vdc_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary VDC/MUNCI Nepali:</label>
                                <input type="text" wire:model="temporary_munci_vdc_nepali" class="form-control"/>
                                @error('temporary_munci_vdc_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary Ward No English:</label>
                                <input type="text" wire:model="temporary_ward_no_english" class="form-control"/>
                                @error('temporary_ward_no_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary Ward No Nepali:</label>
                                <input type="text" wire:model="temporary_ward_no_nepali" class="form-control"/>
                                @error('temporary_ward_no_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary Tole English:</label>
                                <input type="text" wire:model="temporary_tole_english" class="form-control"/>
                                @error('temporary_tole_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary Tole Nepali:</label>
                                <input type="text" wire:model="temporary_tole_nepali" class="form-control"/>
                                @error('temporary_tole_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary House No English:</label>
                                <input type="text" wire:model="temporary_house_no_english" class="form-control"/>
                                @error('temporary_house_no_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary House No Nepali:</label>
                                <input type="text" wire:model="temporary_house_no_nepali" class="form-control"/>
                                @error('temporary_house_no_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary Contact No English:</label>
                                <input type="text" wire:model="temporary_contact_no_english" class="form-control"/>
                                @error('temporary_contact_no_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary Contact No Nepali:</label>
                                <input type="text" wire:model="temporary_contact_no_nepali" class="form-control"/>
                                @error('temporary_contact_no_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Temporary Email:</label>
                                <input type="text" wire:model="temporary_email" class="form-control"/>
                                @error('temporary_email') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif
                    </div>
                    <button class="btn btn-danger nextBtn btn-sm pull-left" type="button" wire:click="back(1)">Back</button>
                    <button class="btn btn-success btn-sm pull-right" wire:click="secondStepSubmit" type="button">Next!</button>
                </div>
            </div>

        </div>

        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h3> Facility Holder</h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="title">Facility Holder Name Nepali:</label>
                                <input type="text" wire:model="facility_holder_name_nepali" class="form-control" />
                                @error('facility_holder_name_nepali') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Facility Holder Name English:</label>
                                <input type="text" wire:model="facility_holder_name_english" class="form-control" />
                                @error('facility_holder_name_english') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Facility Holder Relation:</label>
                                <input type="text" wire:model="facility_holder_relation" class="form-control"/>
                                @error('facility_holder_relation') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">State:</label>
                                <input type="text" wire:model="facility_holder_state" class="form-control"/>
                                @error('facility_holder_state') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">District:</label>
                                <input type="text" wire:model="facility_holder_district" class="form-control"/>
                                @error('facility_holder_district') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Muncipality/VDC:</label>
                                <input type="text" wire:model="facility_holder_muncipality_vdc" class="form-control"/>
                                @error('facility_holder_muncipality_vdc') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Ward No:</label>
                                <input type="text" wire:model="facility_holder_ward_no" class="form-control"/>
                                @error('facility_holder_ward_no') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Tole:</label>
                                <input type="text" wire:model="facility_holder_tole" class="form-control"/>
                                @error('facility_holder_tole') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">House No:</label>
                                <input type="text" wire:model="facility_holder_house_no" class="form-control"/>
                                @error('facility_holder_house_no') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Citizenship No:</label>
                                <input type="text" wire:model="facility_holder_citizenship_no" class="form-control"/>
                                @error('facility_holder_citizenship_no') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description"> Citizenship Verified District:</label>
                                <input type="text" wire:model="facility_holder_verified_district" class="form-control"/>
                                @error('facility_holder_verified_district') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="facility_holder_verified_date">Citizenship Verified Date:</label>
                                <input type="text" wire:model.defer="facility_holder_verified_date" id="facility_holder_verified_date" class="form-control"/>
                                @error('facility_holder_verified_date') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger nextBtn btn-sm pull-left" type="button" wire:click="back(2)">Back</button>
                    <button class="btn btn-success btn-sm pull-right" wire:click="thirdStepSubmit" type="button">Next!</button>
                </div>

            </div>

        </div>
        <div class="row setup-content {{ $currentStep != 4 ? 'displayNone' : '' }}" id="step-4">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h3> Other Details</h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                           
                            <div class="form-group ">
                                <label class="control-label text-right col-md-3">Gender</label>
                                
                                <select wire:model.defer="sex" class="form-control custom-select">
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Others</option>
                                </select>
                                <small class="form-control-feedback"> Select your gender. </small>
                                @error('sex') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Religion:</label>
                                <input type="text" wire:model="religion" class="form-control" />
                                @error('religion') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Ethincity:</label>
                                <input type="text" wire:model="ethincity" class="form-control"/>
                                @error('ethincity') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Huliya:</label>
                                <input type="text" wire:model="huliya" class="form-control"/>
                                @error('huliya') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Blood Group:</label>
                                <input type="text" wire:model="blood_group" class="form-control"/>
                                @error('blood_group') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="mool" id="mool" value="1" />
                                <label for="mool">मूल :</label>
                                @error('mool') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="female" id="female" value="1" />
                                <label for="female">महिला:</label>
                                @error('female') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="aadhibasi_ho" id="aadhibasi" value="1" />
                                <label for="aadhibasi_ho">आदिवासी/जनजाति:</label>
                                @error('aadhibasi_ho') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @if($aadhibasi_ho)
                         <div class="form-group">
                                <label for="description">विवरण:</label>
                                <input type="text" wire:model="aadhibasi" class="form-control"/>
                                @error('aadhibasi') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        @endif
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="dalit_ho" id="dalit" value="1" />
                                <label for="dalit_ho">दलित:</label>
                                @error('dalit_ho') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @if($dalit_ho)
                         <div class="form-group">
                                <label for="description">कुन जात:</label>
                                <input type="text" wire:model="dalit" class="form-control"/>
                                @error('dalit') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        @endif
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="madhesi_ho" id="madhesi_ho" value="1" />
                                <label for="madhesi_ho">मधेसि हो:</label>
                                @error('madhesi_ho') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @if($madhesi_ho)
                         <div class="form-group">
                                <label for="description">विवरण:</label>
                                <input type="text" wire:model="madhesi" class="form-control"/>
                                @error('madhesi') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        @endif

                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="pichadiyeko_jilla_ho" id="pichadiyeko_jilla_ho" value="1" />
                                <label for="pichadiyeko_jilla_ho">पिछडीएको जिल्ला हो?:</label>
                                @error('pichadiyeko_jilla_ho') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @if($pichadiyeko_jilla_ho)
                            <div class="form-group">
                                <label for="description">कुन जिल्ला?:</label>
                                <input type="text" wire:model="pichadiyeko_jilla" class="form-control"/>
                                @error('pichadiyeko_jilla') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        @endif
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input wire:model='aapangata_ho' type="checkbox"  id="appagata_check" value="1">
                                <label for="appagata_check">अपाङ्गता</label>
                                @error('aapangata_ho') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @if($aapangata_ho)
                            <div class="col-sm-12 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="description">अपाङ्गता किसिम:</label>
                                    <input type="text" wire:model="aapangata_kisim" class="form-control"/>
                                    @error('aapangata_kisim') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        @endif
                    </div>
                    <button class="btn btn-danger nextBtn btn-sm pull-left" type="button" wire:click="back(3)">Back</button>
                    <button class="btn btn-success btn-sm pull-right" wire:click="fourthStepSubmit" type="button">Next!</button>
                </div>

            </div>

        </div>
        <div class="row setup-content {{ $currentStep != 5 ? 'displayNone' : '' }}" id="step-5">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h3> Local Language</h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="title">Language:</label>
                                <input type="text" wire:model="local_langauge.0" class="form-control" />
                                @error('local_langauge.0') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="description">Written Skill:</label>
                                <input type="text" wire:model="local_langauge_written_skill.0" class="form-control" />
                                @error('local_langauge_written_skill.0') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="description">Reading Skill:</label>
                                <input type="text" wire:model="local_langauge_reading_skill.0" class="form-control"/>
                                @error('local_langauge_reading_skill.0') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="description">Speaking Skill:</label>
                                <input type="text" wire:model="local_langauge_speaking_skill.0" class="form-control"/>
                                @error('local_langauge_speaking_skill.0') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group" style="padding-top: 35px;">
                                <button class="btn btn-success btn-sm" wire:click="addLocalLanguage({{$local_langauges_i}})" type="button">Add!</button>
                            </div>
                        </div>
                        
                        @foreach($local_langauges as $key => $value)
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="title">Language:</label>
                                    <input type="text" wire:model="local_langauge.{{$value}}" class="form-control" />
                                    @error('local_langauge.'.$value) <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="description">Written Skill:</label>
                                    <input type="text" wire:model="local_langauge_written_skill.{{$value}}" class="form-control" />
                                    @error('local_langauge_written_skill.'.$value) <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="description">Reading Skill:</label>
                                    <input type="text" wire:model="local_langauge_reading_skill.{{$value}}" class="form-control"/>
                                    @error('local_langauge_reading_skill.'.$value) <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="description">Speaking Skill:</label>
                                    <input type="text" wire:model="local_langauge_speaking_skill.{{$value}}" class="form-control"/>
                                    @error('local_langauge_speaking_skill.'.$value) <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group" style="padding-top: 35px;">
                                    <button class="btn btn-danger btn-sm " wire:click.prevent="removeLocalLanguage({{$key}})">Remove</button>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                    <button class="btn btn-danger nextBtn btn-sm pull-left" type="button" wire:click="back(4)">Back</button>
                    <button class="btn btn-success btn-sm pull-right" wire:click="fifthStepSubmit" type="button">Next!</button>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 6 ? 'displayNone' : '' }}" id="step-6">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h3> Foreign Language</h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="title">Language:</label>
                                <input type="text" wire:model="foreign_langugae.0" class="form-control" />
                                @error('foreign_langugae.0') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="description">Written Skill:</label>
                                <input type="text" wire:model="foreign_langauge_written_skill.0" class="form-control" />
                                @error('foreign_langauge_written_skill.0') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="description">Reading Skill:</label>
                                <input type="text" wire:model="foreign_langauge_reading_skill.0" class="form-control"/>
                                @error('foreign_langauge_reading_skill.0') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="form-group">
                                <label for="description">Speaking Skill:</label>
                                <input type="text" wire:model="foreign_langauge_speaking_skill.0" class="form-control"/>
                                @error('foreign_langauge_speaking_skill.0') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            
                        </div>
                        <div class="col-sm-12 col-md-4 col-lg-4">
                            <div class="form-group" style="padding-top: 35px;">
                                <button class="btn btn-success btn-sm" wire:click="addForeignLanguage({{$foreign_langauges_i}})" type="button">Add!</button>
                            </div>
                        </div>
                        
                        @foreach($foreign_langauges as $key => $value)
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="title">Language:</label>
                                    <input type="text" wire:model="foreign_langugae.{{$value}}" class="form-control" />
                                    @error('foreign_langugae'.$value) <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="description">Written Skill:</label>
                                    <input type="text" wire:model="foreign_langauge_written_skill.{{$value}}" class="form-control" />
                                    @error('foreign_langauge_written_skill'.$value) <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="description">Reading Skill:</label>
                                    <input type="text" wire:model="foreign_langauge_reading_skill.{{$value}}" class="form-control"/>
                                    @error('foreign_langauge_reading_skill'.$value) <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-2 col-lg-2">
                                <div class="form-group">
                                    <label for="description">Speaking Skill:</label>
                                    <input type="text" wire:model="foreign_langauge_speaking_skill.{{$value}}" class="form-control"/>
                                    @error('foreign_langauge_speaking_skill'.$value) <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4">
                                <div class="form-group" style="padding-top: 35px;">
                                    <button class="btn btn-danger btn-sm " wire:click.prevent="removeForeignLanguage({{$key}})">Remove</button>
                                </div>
                            </div>
                        @endforeach
                        
                    </div>
                    <button class="btn btn-danger nextBtn btn-sm pull-left" type="button" wire:click="back(5)">Back</button>
                    <button class="btn btn-success btn-sm pull-right" wire:click="sixthStepSubmit" type="button">Next!</button>
                </div>
            </div>
        </div>
        <div class="row setup-content {{ $currentStep != 7 ? 'displayNone' : '' }}" id="step-7">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h3> Organization Details</h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="title">Name :</label>
                                <input type="text" wire:model="organization_name" class="form-control" />
                                @error('organization_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Address :</label>
                                <input type="text" wire:model="organization_address" class="form-control" />
                                @error('organization_address') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div  class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="organization_niyukti_date">Niyukti Date :</label>
                                <input type="text" wire:model.defer="organization_niyukti_date" id="organization_niyukti_date" class="form-control"/>
                                @error('organization_niyukti_date') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div  class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="organization_nirnaya_date">Nirnaya Date :</label>
                                <input type="text" wire:model.defer="organization_nirnaya_date" id="organization_nirnaya_date" class="form-control"/>
                                @error('organization_nirnaya_date') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div  class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="organization_hajiri_date">Hajiri Date :</label>
                                <input type="text" wire:model.defer="organization_hajiri_date" id="organization_hajiri_date" class="form-control"/>
                                @error('organization_hajiri_date') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div  class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Sewa :</label>
                                <input type="text" wire:model="organization_sewa" class="form-control"/>
                                @error('organization_sewa') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Samuha :</label>
                                <input type="text" wire:model="organization_samuha" class="form-control"/>
                                @error('organization_samuha') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Upasamuha :</label>
                                <input type="text" wire:model="organization_upasamuha" class="form-control"/>
                                @error('organization_upasamuha') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Shreni/Taha :</label>
                                <input type="text" wire:model="organization_shreni_taha" class="form-control"/>
                                @error('organization_shreni_taha') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Position:</label>
                                <input type="text" wire:model="organization_position" class="form-control"/>
                                @error('organization_position') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input wire:model='organization_technical' type="checkbox" id="org_technical" @if($same_as_permanent==1) checked @endif />
                                <label for="org_technical">Technical</label>           
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger nextBtn btn-sm pull-left" type="button" wire:click="back(6)">Back</button>
                    <button class="btn btn-success btn-sm pull-right" wire:click="seventhStepSubmit" type="button">Next!</button>
                </div>
            </div>

        </div>
        <div class="row setup-content {{ $currentStep != 8 ? 'displayNone' : '' }}" id="step-8">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h3>Previous Organization Details</h3>
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="title">Name :</label>
                                <input type="text" wire:model="prev_organization_name" class="form-control" />
                                @error('prev_organization_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Address :</label>
                                <input type="text" wire:model="prev_organization_address" class="form-control" />
                                @error('prev_organization_address') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div  class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="prev_organization_niyukti_date">Niyukti Date :</label>
                                <input type="text" wire:model.defer="prev_organization_niyukti_date" id="prev_organization_niyukti_date" class="form-control"/>
                                @error('prev_organization_niyukti_date') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div  class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="prev_organization_nirnaya_date">Nirnaya Date :</label>
                                <input type="text" wire:model.defer="prev_organization_nirnaya_date" id="prev_organization_nirnaya_date" class="form-control"/>
                                @error('prev_organization_nirnaya_date') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div  class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="prev_organization_hajiri_date">Hajiri Date :</label>
                                <input type="text" wire:model.defer="prev_organization_hajiri_date" id="prev_organization_hajiri_date" class="form-control"/>
                                @error('prev_organization_hajiri_date') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Sewa :</label>
                                <input type="text" wire:model="prev_organization_sewa" class="form-control"/>
                                @error('prev_organization_sewa') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Samuha :</label>
                                <input type="text" wire:model="prev_organization_samuha" class="form-control"/>
                                @error('prev_organization_samuha') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Upasamuha :</label>
                                <input type="text" wire:model="prev_organization_upasamuha" class="form-control"/>
                                @error('prev_organization_upasamuha') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Shreni/Taha :</label>
                                <input type="text" wire:model="prev_organization_shreni_taha" class="form-control"/>
                                @error('prev_organization_shreni_taha') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Position:</label>
                                <input type="text" wire:model="prev_organization_position" class="form-control"/>
                                @error('prev_organization_position') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div  wire:ignore class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="prev_organization_resign_date">Resign Date:</label>
                                <input type="text" wire:model="prev_organization_resign_date" id="prev_organization_resign_date" class="form-control"/>
                                @error('prev_organization_resign_date') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Reason:</label>
                                <input type="text" wire:model="prev_organization_resign_reason" class="form-control"/>
                                @error('prev_organization_resign_reason') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input wire:model='prev_organization_technical' type="checkbox" id="prev_org_technical" value="1"/>
                                <label for="prev_org_technical">Technical</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger nextBtn btn-sm pull-left" type="button" wire:click="back(7)">Back</button>
                    <button class="btn btn-success btn-sm pull-right" wire:click="eigthStepSubmit" type="button">Next!</button>
                </div>
            </div>

        </div>
        
        <div class="row setup-content {{ $currentStep != 9 ? 'displayNone' : '' }}" id="step-10">
            <div class="col-md-12">
                <div class="col-md-12">
                    <h3>Other Details</h3>
                    <div class="row">
                        @if(!$baal_bibaha)
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="bahu_bibaha" id="bahubibaha"  value="1" />
                                <label for="bahubibaha">Bahu Bibaha</label>
                                @error('bahu_bibaha') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif
                        
                        @if(!$bahu_bibaha)
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="baal_bibaha" id="baalbibaha" value="1"/>
                                <label for="baalbibaha">Baal Bibahaa</label>
                                @error('baal_bibaha') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif
                       
                        @if($bahu_bibaha || $baal_bibaha)
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Wife Name :</label>
                                <input type="text" wire:model="wife_name" class="form-control"/>
                                @error('wife_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif
                        @if(!$is_spouce_in_other_country)
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="is_spouce_apply_for_pr" id="spouce_apply_for_pr" value="1"/>
                                <label for="spouce_apply_for_pr">Spouce Apply For PR </label>
                                @error('is_spouce_apply_for_pr') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif
                        @if(!$is_spouce_apply_for_pr)
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="is_spouce_in_other_country" id="spouce_in_other_country" value="1"/>
                                <label for="spouce_in_other_country">Spouce In Other Country </label>
                                @error('is_spouce_in_other_country') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif
                        @if($is_spouce_in_other_country || $is_spouce_apply_for_pr)
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Country Name :</label>
                                <input type="text" wire:model="country_name" class="form-control"/>
                                @error('country_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif
                        @if($is_spouce_in_other_country || $is_spouce_apply_for_pr)
                            <div  class="col-sm-12 col-md-3 col-lg-3">
                                <div class="form-group">
                                    <label for="apply_date">Date :</label>
                                    <input type="date" wire:model="apply_date" id="apply_date" min="1990-01-01" max="new Date().toISOString().split('T')[0]" class="form-control"/>
                                    @error('apply_date') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        @endif
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="mr-sm-2 mb-3">
                                <input type="checkbox" wire:model="pending_payment_government" id="pending_payment"  value="1"/>
                                <label for="pending_payment">Pending Payment Governmemt </label>
                                @error('pending_payment_government') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @if($pending_payment_government)
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Reason :</label>
                                <input type="text" wire:model="reason" class="form-control"/>
                                @error('reason') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        @endif
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="form-group">
                                <label for="description">Experience Qualification:</label>
                                <input type="text" wire:model="experience_qualification" class="form-control"/>
                                @error('experience_qualification') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-danger nextBtn btn-sm pull-left" type="button" wire:click="back(8)">Back</button>
                    <button class="btn btn-success btn-sm pull-right" wire:click="submitForm" type="button">Finish!</button>
                </div>

            </div>

        </div>
    </div>
</div>
@push('scripts')
    <script>
    document.getElementById("nepali-datepicker").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('birth_date_nepali', val.bs);
            }
    });
    document.getElementById("citizenship_verified_date_employee").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('verified_date', val.bs);
            }
    });
    document.getElementById("facility_holder_verified_date").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('facility_holder_verified_date', val.bs);
            }
    });
    document.getElementById("organization_niyukti_date").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('organization_niyukti_date', val.bs);
            }
    });

    document.getElementById("organization_nirnaya_date").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('organization_nirnaya_date', val.bs);
            }
    });
    document.getElementById("organization_hajiri_date").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('organization_hajiri_date', val.bs);
            }
    });
    document.getElementById("prev_organization_niyukti_date").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('prev_organization_niyukti_date', val.bs);
            }
    });

    document.getElementById("prev_organization_nirnaya_date").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('prev_organization_nirnaya_date', val.bs);
            }
    });
    document.getElementById("prev_organization_hajiri_date").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('prev_organization_hajiri_date', val.bs);
            }
    });
    document.getElementById("prev_organization_resign_date").nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            readOnlyInput: true,
            onChange: function(val) {
                @this.set('prev_organization_resign_date', val.bs);
            }
    });
    
    
   
    </script>
@endpush
