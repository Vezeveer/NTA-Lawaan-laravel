<x-layout>

<form name="user_create" method="post" action="/users">
    @csrf
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
        </div>
        <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
        </div>
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}">
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        </div>
        <input type="password" name="password" placeholder="Password" value="{{old('password')}}">
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
        </div>
        <input type="password" name="password_confirmation"  placeholder="Re-enter Password" value="{{old('password_confirmation')}}">
        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
    </div>
    <fieldset class="form-group">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Member</label>
            </div>
            <select name="userType" class="custom-select" id="inputGroupSelect01">
                <option selected value="bdc" selected>Barangay Development Council</option>
                <option value="bc">Barangay Committee</option>
                <option value="bo">Budget Office</option>
            </select>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {{-- <div class="form-group row">
        <div id="message" class="alert alert-light d-none" role="alert">
            <hr>
            <h5 class="alert-heading">Password must contain the following:</h5>
            <ul style="list-style: none;">
                <li id="letter" class="invalid1">A <b>lowercase</b> letter</li>
                <li id="capital" class="invalid1">A <b>capital (uppercase)</b> letter</li>
                <li id="number" class="invalid1">A <b>number</b></li>
                <li id="length" class="invalid1">Minimum <b>8 characters</b></li>
            </ul>
            <p>Please make sure username has no spaces in it, or special characters. Thank you.</p>
        </div>
    </div> --}}
</form>

</x-layout>


{{-- Old stuff below --}}

{{-- <!--ADDING NEW USER PROMPT.modal -->
<div class="modal fade" id="UserModalBack">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">New User</h4>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                <form name="user_create" method="post" <?php echo "action=\"/includes1/new_user.php\"" ?>>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-id-card"></i></span>
                        </div>
                        <input type="text" name="fullName" class="form-control" placeholder="Full Name" aria-label="Full Name" aria-describedby="basic-addon1" pattern="\S(.*\S)?" maxlength="50" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="userEmail" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" pattern="\S(.*\S)?" maxlength="50" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="userName" class="form-control input_username" id="usrName" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" pattern="\S(.*\S)?" maxlength="50" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="userPsw" class="form-control" placeholder="Password" id="psw" aria-label="Password" aria-describedby="basic-addon1" pattern="\S(.*\S)?" maxlength="50" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="userPsw2" class="form-control" placeholder="Re-enter Password" id="confirm_password" aria-label="Re-enter Password" pattern="\S(.*\S)?" aria-describedby="basic-addon1" maxlength="50" required>
                    </div>
                    <fieldset class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Member</label>
                            </div>
                            <select name="userType" class="custom-select" id="inputGroupSelect01" required>
                                <option selected value="bdc" selected>Barangay Development Council</option>
                                <option value="bc">Barangay Committee</option>
                                <option value="bo">Budget Office</option>
                            </select>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button id="user_submit" type="submit" class="btn btn-primary" onsubmit="validateForm()" disabled>Submit</button>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div id="message" class="alert alert-light d-none" role="alert">
                            <hr>
                            <h5 class="alert-heading">Password must contain the following:</h5>
                            <ul style="list-style: none;">
                                <li id="letter" class="invalid1">A <b>lowercase</b> letter</li>
                                <li id="capital" class="invalid1">A <b>capital (uppercase)</b> letter</li>
                                <li id="number" class="invalid1">A <b>number</b></li>
                                <li id="length" class="invalid1">Minimum <b>8 characters</b></li>
                            </ul>
                            <p>Please make sure username has no spaces in it, or special characters. Thank you.</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}