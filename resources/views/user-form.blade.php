<div>
   <h1>Add New User</h1>

<h3> {{URL::current()}}</h3>

<!-- <h3> {{URL::full()}}</h3> -->
   <!-- @if($errors->any())
        @foreach($errors->all() as $error)
            <div style="color:red">
               {{$error}}
            </div>
        @endforeach
   @endif -->

   <!-- <h3>{{URL::previous()}}</h3> -->


   <form action="adduser" method="post">
        @csrf
        <div class="inputwrpper">
            <input type="text" placeholder="Enter User name" name="username">
            <span style="color: red;">@error('username') {{$message}} @enderror</span>
            <br><br>
            
            <input type="text" placeholder="Enter User Email" name="email">
            <span style="color: red;">@error('email') {{$message}} @enderror</span>
            <br><br>
            <input type="text" placeholder="Enter User City" name="city">
            <span style="color: red;">@error('city') {{$message}} @enderror</span>
            <br><br>
            <input type="checkbox" name="skills[]" id="PHP" value="PHP">
            <label for="">PHP</label>
            <input type="checkbox" name="skills[]" id="JAVA" value="JAVA">
            <label for="">JAVA</label>
            <input type="checkbox" name="skills[]" id="JavaScript" value="JavaScript">
            <label for="">JavaScript</label>
            <span style="color: red;">@error('skills') {{$message}} @enderror</span>
            <br><br>
            <button>Add New User</button>
        </div>

   </form>
</div>

<style>
    .inputwrpper{
        border: 1px solid black;
        width: max-content;
        padding: 20px;
    }
    button{
        background: lightcoral;
        color: black;
        padding: 8px 10px;
        cursor: pointer;
        border: none;
        border-radius: 10px;
    }
</style>
