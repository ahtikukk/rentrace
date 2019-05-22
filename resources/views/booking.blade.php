@extends('layouts.main')

@section('title','Rentrace')
    
@section('content')

    <!--CONTAINER START-->
    <div class="mt-3">
            <div class="row">
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                <img src="{{ asset('storage/golf.jpg') }}" class="img-thumbnail img-fluid" alt="vw golf gti" width="100%" height="225">
                  <div class="card-body">
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <small class="text-muted">Price starts from 200 EUR</small>
                    </div>
                  </div>
                </div>
              </div>
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <img src="{{ asset('storage/golf.jpg') }}" class="img-thumbnail img-fluid" alt="vw golf gti" width="100%" height="225">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted">Price starts from 200 EUR</small>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                      <img src="{{ asset('storage/golf.jpg') }}" class="img-thumbnail img-fluid" alt="vw golf gti" width="100%" height="225">
                      <div class="card-body">
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                          <small class="text-muted">Price starts from 200 EUR</small>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <!--TABLE-->
            <table class="table table-light">
                <thead class="table-light">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">2 Laps</th>
                    <th scope="col">4 Laps</th>
                    <th scope="col">Extra Lap</th>
                    <th scope="col">Exess</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-active">
                    <th>VW Golf</th>
                    <td>150 EUR</td>
                    <td>300 EUR</td>
                    <td>140 EUR</td>
                    <td>9000 EUR</td>
                </tr>
                <tr>
                    <th>Porsche</th>
                    <td>200 EUR</td>
                    <td>400 EUR</td>
                    <td>170 EUR</td>
                    <td>10 000 EUR</td>
                </tr>
                <tr class="table-active">
                    <th>BMW</th>
                    <td>250 EUR</td>
                    <td>500 EUR</td>
                    <td>200 EUR</td>
                    <td>12 000 EUR</td>
                </tr>
                </tbody>
            </table><!--TABLE END-->
          </div> <!--CONTAINER END-->
    
@endsection