@extends('training_and_placement_cell.layout')

@section('content')
        
        <div class="main-container row">
            <div class="col s12 m5 offset-m3"><h4> Company info</h4></div>

            

             <a href="/training_and_placement_cell/tpo/page">
                <div class="col m1 offset-m3 link" style="background-color:#076392;">
                    <center><h5 style="color:white;"><i class="fa fa-home"></i></h5></center>
                </div>
            </a>
            
            <div class="col s12 m12">
              @if(count($errors) > 0)
                <div class="alert alert-danger">
                  
                      @foreach($errors->all() as $error)
                          <h6 style="color:red; display:inline;">{{ $error }}</h6> 
                      @endforeach
                  
                </div>
              @endif
            </div>
           
            {!! Form::open(array('route' => 'companyForm_store1', 'class' => 'form')) !!}
            
             <div class="container col s10" style= "position:relative;box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12);margin-left:75px;margin-top:20px;padding-top:20px;">
                        <div class="col s12">
                            Company ID : {!!$company[0]!!}
                            <br><br>
                        </div>
                          <div class="input-field col s12" style="display:none;">
                              
                              
                          {!! Form::text('comID', $company[0], 
                              array('id' => 'comID', 
                                    'class'=>'validate',
                                    'placeholder'=>'Company ID..')) !!}
                              
                              </div>
                            
                        <div class="col s12">
                            Company Name
                        </div>
                          <div class="input-field col s12">
                              
                              
                          {!! Form::text('comname', null, 
                              array('id' => 'comname', 
                                    'class'=>'validate',
                                    'placeholder'=>'Company name..')) !!}
                              
                              </div>
                    <div class="col s12">
                            Company Type
                        </div>
                          <div class="input-field col s12">
                              <!-- {!! Form::text('ctype', null, 
                              array('id' => 'ctype', 
                                    'class'=>'validate',
                                    'placeholder'=>'Company type..')) !!} -->
                              {{ Form::select('ctype', [
                                 'Placement' => 'Placement',
                                 'Internship' => 'Internship'])
                                 }}    
                              
                              </div>
                            
                        <div class="col s12">
                            Eligibility criteria
                        </div>
                         <div class="input-field col s12">
                              <!-- {!! Form::text('eligibility', null, 
                              array('id' => 'eligibility', 
                                    'class'=>'validate',
                                    'placeholder'=>'Eligibility criteria..')) !!} -->

                              {{ Form::select('eligibility', $branches)
                                 }}
                              
                              </div>
                 <div class="col s12">
                           Minimum Qualifications
                        </div>
                <div class="input-field col s12">
                              {!! Form::text('minqual', null, 
                              array('id' => 'minqual', 
                                    'class'=>'validate',
                                    'placeholder'=>'Ex: 8 or 8.3')) !!}
                              </div>
                                      
                
                          
                 <div class="col s12" style="padding-top:30px;">
                           Salary Offered
                        </div>
                   <div class="input-field col s12">
                            {!! Form::text('sal', null, 
                              array('id' => 'sal', 
                                    'class'=>'validate',
                                    'placeholder'=>'Salary....')) !!}
                    </div>
                 
                 
                 <div class="col s12">
                         Arrival Date
                        </div>
                <div class="input-field col s12">
                              
                     {!! Form::date('arrival', null, 
                                    array('id' => 'arrival', 
                                          'class'=>'dat',
                                            'placeholder'=>'Arrival date...')) !!}
                              </div>
                
               <a>
                  {!! Form::submit('Submit', 
                    array('class'=>'waves-effect btn')) !!}
              </a>
               
                   
                
                
             
            </div>
            
            {!! Form::close() !!}
        </div>
        
        
                
                
     @stop  

     @section('js')
<script src="{{URL::asset('js/studentForm.js')}}"></script>
@stop         
                
                
                
                
                
                
                
                
                
                
                
                
                
        
        