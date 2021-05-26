@extends('layouts.admin')
@section('content')

<div class="blog-listing blog-listing-classic wow fadeIn">
      <div class="row">
            <div class="col-md-12 col-sm-12  ">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{ __('Current Project List') }}
                  <p class="card-category"></p>
                  <a href="{{ route('chef.create') }}" class="btn btn-primary btn-round">Add New project</a></h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>
                        {{ __('ID') }} 
                        </th>
                        <th>
                        {{ __('Label') }}  
                        </th>
                        <th>
                        {{ __('Client') }}  
                        </th>
                        <th>
                        {{ __('Actions') }}  
                        </th>
                        
                      </thead>
                      <tbody>
                      @foreach($projets as $pj)
                        <tr>
                          <td>
                          {{ $pj->id }}
                          </td>
                          <td>
                          {{ $pj->libelle }}
                          </td>
                          <td>
                          {{ $pj->team_id }}
                          </td>
                          <td>
                          {{ $pj->user_id }}
                          </td>
                          <td>
                          {{ $pj->date_deb }}
                          </td>
                          <td>
                          {{ $pj->date_prev_fin }}
                          </td>
                          <td><a href="{{ route('chef.edit',$pj->id) }}"  class="btn btn-info btn-round">{{ __('Edit') }} </a>
                              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger btn-round">{{ __('Delete') }}</a>
                              <form action="{{ route('chef.destroy',$pj->id) }}" method="post">
    @method('DELETE')
    @csrf
</form>
                          </td>
                         
                        </tr>
                       @endforeach
                       
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
           
            
 @endsection 