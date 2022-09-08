@extends('layouts.app')

@section('content')
    <div class="container-fluid pt-3">
        <div class="d-flex justify-content-sm-around flex-wrap">
            <div class="p-2 bd-highlight">
                <div class="form-group d-flex align-items-center ">
                    <label for="ber" class="col-xs-2 control-label">Registered Carrier</label>
                    <div class="col-xs-2 p-1">
                        <select class="form-select " aria-label="Default select example" data-style="btn-warning" style="height: 30px; font-size: 10px;">
                            <option selected>Tous</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
            </div>
            
            <div class="p-2 bd-highlight">
                <div class="form-group d-flex align-items-center ">
                    <label for="ber" class="col-xs-2 control-label">Attribute Carrier</label>
                    <div class="col-xs-2 p-1">
                        <select class="form-select " aria-label="Default select example" data-style="btn-warning" style="height: 30px; font-size: 10px;">
                            <option selected>Tous</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
            </div>

            <div class="p-2 bd-highlight">
                <div class="form-group d-flex align-items-center ">
                    <label for="ber" class="col-xs-2 control-label">Origine</label>
                    <div class="col-xs-2 p-1">
                        <select class="form-select " aria-label="Default select example" data-style="btn-warning" style="height: 30px; font-size: 10px;">
                            <option selected>Tous</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
            </div>

            <div class="border d-flex align-items-center" style="height: 50px;">
               
                 <div class="form-check ml-2 d-flex align-items-center">
                    <input type="radio" class="form-check-input" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label d-flex align-items-center" for="flexDefaultRadio1">
                        <input type="date" name="" id="" style="height: 20px;">
                        <p class="p-2">au</p>
                        <input type="date" name="" id="" style="height: 20px;">
                    </label>
                 </div>

                <div class="form-check" style="margin-left: 95px;">
                    <input type="radio" class="form-check-input" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexDefaultRadio1">
                        <div style="margin-right: 10px;">
                            <select class="form-select" aria-label="Default select example" style="height: 30px; font-size: 10px;" data-style="btn-warning">
                                <option selected>2022</option>
                                <option value="1">2021</option>
                                <option value="2">2020</option>
                                <option value="3">2012</option>
                        </select>
                        </div>
                       
                    </label>
                 </div>

            </div>
            

               
            
        </div>

        

        <div class="d-flex justify-content-sm-around flex-wrap pt-3">     
            <div class="p-2 bd-highlight">
                <div class="form-group d-flex align-items-center ">
                    <label for="ber" class="col-xs-2 control-label">Registered flight</label>
                    <div class="col-xs-2 p-1">
                        <select class="form-select " aria-label="Default select example" data-style="btn-warning" style="height: 30px;font-size: 10px;">
                            <option selected>Tous</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                    </div>
                </div>
            </div>

             <div class="p-2 bd-highlight">                
                <form method="POST" action="{{ route('searchNuld') }}" class="input-group ">
                    @csrf
                    <div class="form-outline" style="width: 100px;">
                        <input type="search" name="nUld" placeholder="N° d'ULD" class="form-control" style="height: 30px; font-size: 12px;"/>
                    </div>
                    <button type="submit" id="confirm_search" class="btn btn-primary" style="height: 30px;">OK</button>
                </form>
            </div>

            <div class="p-2 bd-highlight">
                <div class="input-group ">
                    <div class="form-outline" style="width: 200px; font-size: 8px;">
                        <input type="search" name="" id="form1" placeholder="N° de récipient" class="form-control" style="height: 30px; font-size: 12px;"/>
                    </div>
                    <button type="button" class="btn btn-primary" style="height: 30px;">OK</button>
                </div>
            </div>

            <div class="p-2 bd-highlight">
                <div class="input-group ">
                    <div class="form-outline" style="width: 200px;">
                        <input type="search" name="" id="form1" placeholder="MRD Label" class="form-control" style="height: 30px; font-size: 12px;"/>
                    </div>
                    <button type="button" class="btn btn-primary" style="height: 30px;">OK</button>
                </div>
            </div>


            <div class="p-2 bd-highlight">
                <div class="input-group ">
                    <div class="form-outline" style="width: 200px;">
                        <input type="search" name="" id="form1" placeholder="MRD Location"  class="form-control" style="height: 30px; font-size: 12px;"/>
                    </div>
                    <button type="button" class="btn btn-primary text-center" style="height: 30px;">ok</button>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5 container-fluid bg-body rounded-4">
        <div class="d-flex justify-content-start align-items-center">
            <div class="m-2 ml-4">
                <h4>RECEPTIONS EXPORT</h4>
            </div>
            <div class="mt-3 ml-4">
                <p>Nombre d'ULD: 6</p>
            </div>
            <div class="mt-3 ml-4">
                <p>Nombre de recipients: 8</p>
            </div>
            <div class="mt-3 ml-4">
                <p>Poids total: 78</p>
            </div>
            <div class="mt-3- ml-5">
                <a href="{{ route('downExcel') }}">
                    <button type="button" class="btn btn-success"><i class="fas fa-file-excel"></i>Télécharger</button>
                </a>
            </div>

        </div>
        
        
       
        {{-- Tableau --}}
         <table class="table table-bordered mt-5" style="font-size:10px;" >
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="text-wrap" style="text-align: center; width: 60px;">Handover Date&Hour</th>
                    <th scope="col" style="width: 300px; text-align:center;">ULD/Receptable</th>
                    <th scope="col" style="width: 40px;">Origine</th>
                    <th scope="col" style="width: 200px; text-align:center;">Actual arrival</th>
                    <th scope="col" style="width: 80px; text-align:center;">Reg. vs arr</th>
                    <th scope="col" style="width: 200px; text-align:center;">MRD Location</th>
                    <th scope="col" style="width: 50px; text-align:center;">Handler</th>
                    <th scope="col" style="width: 200px; text-align:center;">MRD Label</th>
                    <th scope="col" style="width: 60px; text-align:center;">Regist. Carrier</th>
                    <th scope="col" style="width: 60px; text-align:center;">Regist. Flight</th>
                    <th scope="col" style="width: 60px; text-align:center;">Attributed Carrier</th>
                    <th scope="col" style="width: 60px; text-align:center;">Attributed Receptacles</th>
                    <th scope="col" style="width: 60px; text-align:center;" >Weight</th>
                  </tr>
                  </thead>
                @foreach ($ulds as $uld)
                  <tbody id="results">
                
                    <tr >
                        <th id="remove" scope="row" >{{ $uld->date }}</th>
                        <td id="remove" style="width: 10px;">{{ $uld->hour }}</td>
                        <td id="remove"> {{ $uld->name }}  <button onclick="dropdown()" class="dropbtn"><a href="/uld/{{$uld->id}}">drp</a></button></td>
                        <td id="remove">{{ $uld->Origine }}</td>
                        <td id="remove">{{ $uld->ActualArrival }}</td>
                        <td id="remove">{{ $uld->Registre }}</td>
                        <td id="remove">{{ $uld->MRDLocation }}</td>
                        <td id="remove">{{ $uld->Handler }}</td>
                        <td id="remove">{{ $uld->MRDLabel }}</td>
                        <td id="remove">{{ $uld->RegistCarrier }}</td>
                        <td id="remove">{{ $uld->RegistFlight }}</td>
                        <td id="remove">{{ $uld->AttributedCarrier }}</td>
                        <td id="remove">{{ $uld->AttributedReceptacles}}</td>
                        <td id="remove">{{ $uld->Weight }}</td>
                    </tr>
            </tbody>
        @endforeach
        </table>
    </div> 
   
    
@endsection


                     
