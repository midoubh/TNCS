@extends('layouts.admin')
@section('content')
  
<div class="blog-listing blog-listing-classic wow fadeIn">
      <div class="row">
            <div class="col-md-12 col-sm-12  ">
          
            <x-jet-validation-errors class="mb-4" />
                <div class="card-body"> 
                  <form  method="POST" action="{{ route('chef.update',['chef' => $projets->id]) }}">
                  {{csrf_field()}}
                  @method('patch')
                  <input name="_method" type="hidden" value="PUT">
                  <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Object') }}</label>
                          <input type="text" class="form-control" id="libelle" name="libelle" value="$projets->libelle"  required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Client') }}</label>
                          
                          <input type="text" class="form-control" id="user_id" value="$projets->user_id" name="user_id" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Team') }}</label>
                          
                          <input type="text" class="form-control" id="team_id" value="$projets->team_id" name="team_id" required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Date Deb') }}</label>
                          <input type="date" class="form-control" id="date_deb" value="$projets->date_deb" name="date_deb"  required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">{{ __('Date Fin Prev') }}</label>
                          <input type="date" class="form-control" id="date_prev_fin" value="$projets->date_prev_fin"  name="date_prev_fin"  required>
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
                    <button type="submit" class="btn btn-primary pull-right">{{ __('Add') }}</button>
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