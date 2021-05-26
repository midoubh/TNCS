@extends('layouts.admin')
@section('content')
  
<div class="blog-listing blog-listing-classic wow fadeIn">
      <div class="row">
            <div class="col-md-12 col-sm-12  ">
          
              <div class="card">
                <div class="card-header card-header-primary">
                      <section class="content-top-margin page-title page-title-small bg-dark-gray">
                          <div class="container">
                              <div class="row">
                                  <div class="col-lg-8 col-md-7 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                                      <!-- page title -->
                                      <h1 class="white-text">{{__('Create a new project')}}</h1>
                                      <!-- end page title -->
                                  </div>
                                
                              </div>
                          </div>
                      </section>
                        <!-- end page title -->
                </div>
                    
                </div>
                </div>
      
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <form  method="POST" action="{{ route('chef.store') }}">
                  @csrf
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Object') }}</label>
                          <input type="text" class="form-control" id="libelle" name="libelle"  required>
                        </div>
                      </div>
                  </div>
                    <div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Client') }}</label>
                          <select id="role_id"  class="block mt-1 w-full"  name="role_id" required >
                          @foreach($users as $usr)
                            <option > {{ $usr->name }}</option>
                            @endforeach
                            </select>
                           </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Team') }}</label>
                          
                          <input type="text" class="form-control" id="team_id" name="team_id" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Date Deb') }}</label>
                          <input type="date" class="form-control" id="date_deb" name="date_deb"  required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Date Fin Prev') }}</label>
                          <input type="date" class="form-control" id="date_prev_fin" name="date_prev_fin"  required>
                        </div>
                      </div>
                    </div>
                    
                   <!-- <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>{{ __('More details') }}</label>
                          <div class="form-group">
                            <label class="bmd-label-floating">{{ __('Giving more information may help you ') }}</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>-->
                        
                    <button type="submit" class="highlight-button-dark btn btn-small button xs-margin-bottom-five pull-right">{{ __('Add') }}</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            
                
             
          </div>
        </div>
      </div>
      </div>
 @endsection 