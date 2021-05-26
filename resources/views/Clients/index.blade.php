@extends('layouts.client')
@section('content')
<section class="content-top-margin page-title page-title-small bg-dark-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-12 wow fadeInUp" data-wow-duration="300ms">
                        <!-- page title -->
                        <h1 class="white-text">{{__('List of projects')}}</h1>
                        <!-- end page title -->
                    </div>
                    
                </div>
            </div>
        </section>
<div class="col-md-8 col-sm-8 col-md-offset-1 ">

<div class="blog-listing blog-listing-classic wow fadeIn">

      <div class="row">
            <div class="col-md-12 col-sm-12  ">
              <div class="card">
                
                <div class="card-body">
                  <div class="table-responsive">
                  
                    <table class="table">
                      <thead class="thead-dark">
                        <th scope="col">
                        {{ __('ID') }} 
                        </th>
                        <th scope="col">
                        {{ __('Label') }}  
                        </th>
                        <th>
                        {{ __('Client') }}  
                        </th scope="col">
                        <th>
                        {{ __('Actions') }}  
                        </th>
                        
                      </thead>
                      <tbody>
                      @foreach($projets as $pj)
                        <tr scope="row">
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
                          <td><a href="{{ route('clients.edit',$pj->id) }}"  class="highlight-button btn btn-very-small button xs-no-margin">{{ __('Details') }} </a>
                              <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-danger btn-round">{{ __('Delete') }}</a>
                              <form action="{{ route('clients.destroy',$pj->id) }}" method="post">
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
           
              </div>        
@endsection 