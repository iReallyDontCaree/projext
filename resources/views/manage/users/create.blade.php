@extends('layouts.manage')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">Create New User</h1>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <form action="{{route('users.store')}}" method="POST">
          {{csrf_field()}}
          <div class="field">
            <label for="name" class="label">Name</label>
            <p class="control">
              <input type="text" class="input" name="name" id="name">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Email:</label>
            <p class="control">
              <input type="text" class="input" name="email" id="email">
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">District:</label>
            <p class="control">
              <select name="districts_id" class="input" id="">
                <option>Choose District</option>
                @foreach (App\District::all() as $data)
                <option value="{{$data->s}}">{{$data->district_name}}</option>
                        
                    @endforeach
            </select>
            </p>
          </div>

          <div class="field">
            <label for="email" class="label">Sector:</label>
            <p class="control">
              <select name="sectors_id" class="input" id="">
                <option>Choose Sector</option>
                @foreach (App\Sector::all() as $data)
                <option value="{{$data->id}}">{{$data->sector_name}}</option>
                        
                    @endforeach
            </select>
            </p>
          </div>


          <div class="field">
            <label for="email" class="label">Village:</label>
            <p class="control">
              <select name="villages_id" class="input" id="">
                <option>Choose Village</option>
                @foreach (App\Village::all() as $data)
                <option value="{{$data->id}}">{{$data->village_name}}</option>
                        
                    @endforeach
            </select>
            </p>
          </div>


          <div class="field">
            <label for="email" class="label">Cell:</label>
            <p class="control">
              <select name="cells_id" class="input" id="">
                <option>Choose Cell</option>
                @foreach (App\Cell::all() as $data)
                <option value="{{$data->id}}">{{$data->cell_name}}</option>
                        
                    @endforeach
            </select>
            </p>
          </div>

        

          <div class="field">
            <label for="password" class="label">Password</label>
            <p class="control">
              <input type="text" class="input" name="password" id="password" v-if="!auto_password" placeholder="Manually give a password to this user">
              <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password">Auto Generate Password</b-checkbox>
            </p>
          </div>

          <button class="button is-success">Create User</button>
        </form>
      </div>
    </div>

  </div> <!-- end of .flex-container -->
@endsection

@section('scripts')
  <script>
    var app = new Vue({
      el: '#app',
      data: {
        auto_password: true
      }
    });
  </script>
@endsection
