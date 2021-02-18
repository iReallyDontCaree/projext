@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Register New Imates</h1>
      </div>
    </div>
    <hr class="m-t-0">
    <form action="{{route('prisons.store')}}" method="POST">
      {{ csrf_field() }}
      <div class="columns">
        <div class="column">
          <div class="box">
            <article class="media">
              <div class="media-content">
                <div class="content">
                  <div class="field">
                    <p class="control">
                      <label for="display_name" class="label">Names</label>
                      <input type="text" class="input" name="names" value="{{old('names')}}" id="names">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="name" class="label">Id Number</label>
                      <input type="number" class="input" name="idnum" value="{{old('idnum')}}" id="idnum">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">Mother name</label>
                      <input type="text" class="input" name="mother_name" value="{{old('mother_name')}}" id="mother_name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">Father's name</label>
                      <input type="text" class="input" name="father_name" value="{{old('father_name')}}" id="father_name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">Mother phone</label>
                      <input type="text" class="input" name="mother_phone" value="{{old('mother_phone')}}" id="mother_phone">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">Father's phone</label>
                      <input type="text" class="input" name="father_phone" value="{{old('father_phone')}}" id="father_phone">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">Guardian's name</label>
                      <input type="text" class="input" name="guardian_name" value="{{old('guardian_name')}}" id="guardian_name">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">guardian phone</label>
                      <input type="text" class="input" name="guardian_phone" value="{{old('guardian_phone')}}" id="guardian_phone">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="cell" class="label">Marital Status</label>
    
                      <select name="marital_status" class="input" id="">
                          <option>Choose Marital Status</option>
                          <option value="married">Married</option>
                          <option value="single">Single</option>
                      </select>
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">cause</label>
                      <input type="text" class="input" name="cause" value="{{old('cause')}}" id="cause">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="district" class="label">District</label>
    
                      <select name="districts_id" class="input" id="">
                          <option>Choose District</option>
                        @foreach (App\District::all() as $data)
                        <option value="{{$data->id}}">{{$data->district_name}}</option>
                                
                            @endforeach
                      </select>
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="sector" class="label">Sector</label>
    
                      <select name="sectors_id" class="input" id="">
                          <option>Choose Sector</option>
                          @foreach (App\Sector::all() as $data)
                          <option value="{{$data->id}}">{{$data->sector_name}}
                                
                            @endforeach
                      </select>
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="village" class="label">Village</label>
    
                      <select name="villages_id" class="input" id="">
                          <option>Choose Village</option>
                          @foreach (App\Village::all() as $data)
                          <option value="{{$data->id}}">{{$data->village_name}}</option>
                                  
                              @endforeach
                      </select>
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="cell" class="label">Cells</label>
    
                      <select name="cells_id" class="input" id="">
                          <option>Choose Cell</option>
                          @foreach (App\Cell::all() as $data)
                          <option value="{{$data->id}}">{{$data->cell_name}}</option>
                                  
                              @endforeach
                      </select>
                    </p>
                  </div>
                  
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">Entry time</label>
                      <input type="date" class="input" value="" id="entry_time" name="entry_time">
                    </p>
                  </div>
                  <div class="field">
                    <p class="control">
                      <label for="description" class="label">Release time</label>
                      <input type="date" class="input" value="" id="release_time" name="release_time">
                    </p>
                  </div>
                  

                   <div class="field">
                    <label for="password" class="label">Imate Status</label>
                    <p class="control">
                      
                      <select name="imate_status"class="input" id="password" v-if="!imate_status">
                          <option>Select Option</option>
                          <option value="in">In</option>
                          <option value="out">Out</option>
                      </select>
                      <b-checkbox name="auto_generate" class="m-t-15" v-model="imate_status">Generate Imate Status</b-checkbox>
                    </p>
                  </div> 
                  
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

      <button class="button is-primary">Register</button>
        </div>
      </div>
    </form>
  </div>
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        imate_status: true
      }
    });
  </script>
@endsection

