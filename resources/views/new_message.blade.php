@extends('layouts.dashbord')
      @section('content')
      <div class="table-responsive">
                    <table id="dataTable" class="table table-hover" style="overflow:hedden; width:100%;">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Subjet</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                              @foreach($contacts as $contact)
                                    <tr class="clickable-row" data-href="{{route('show_message',['id'=>$contact->id])}}" style="cursor:pointer;">
                                          <td>{{$contact->status  ?? ''}}</td>
                                          <td>{{$contact->name ?? ''}}</td>
                                          <td>{{$contact->subjet ?? ''}}</td>
                                          <td>{{$contact->email ?? ''}}</td>
                                          <td>{{$contact->created_at ?? ''}}</td>
                                          <td>
                                                <p><a class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></p>
                                          </td>
                                    </tr>
                              @endforeach
                        </tbody>
                    </table>
                </div> 
      @endsection