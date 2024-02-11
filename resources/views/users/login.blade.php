<x-layout>

<img class="wave" src="images/wave.png">
	<div class="container_login">
		<!-- <div class="img">
			<img src="img/undraw_visionary_technology_re_jfp7.svg">
		</div> -->
		<div class="login-content">
			<form class="login" action="./users/authenticate" method="post">
                @csrf
				<!-- <img class="" src="img/nta_logo_small.png" style="width: 100px;"> -->
				<!-- <h2 class="title" style="color: white; text-shadow: 2px 2px 4px #000000;">Welcome</h2> -->
           		<div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                    </div>
					<input 
					name="name" 
					type="text" 
					class="form-control" 
					placeholder="username" 
					value="{{old('name')}}" 
					required>
					
           		</div>
				  
				<div class="input-group mb-3">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
				</div>
					<input 
					name="password" 
					type="password" 
					class="form-control" 
					placeholder="password" 
					value="{{old('password')}}" 
					required>
					{{-- @error('password')
						<p class="text-red-500 text-xs mt-1">
							{{$message}}
						</p>
					@enderror --}}
           		</div>
				   @error('name')
				   <div>
				   <p class="text-red-500 text-xs mt-1">
					   {{$message}}
				   </p>
				   </div>
			   		@enderror
				<?php
					// if(isset($_GET["error"])){
					// 	if($_GET["error"] == "emptyinput"){
					// 		echo "<p>Fill in all fields!</p>";
					// 	}
					// 	else if($_GET["error"] == "userdoesnotexist" || $_GET["error"] == "wrongpassword"){
					// 		echo "<p id=\"logfade\">Username or Password is incorrect!</p>";
					// 		echo "<style>#logfade{color:red;}</style>
					// 			<script>
					// 			$(function(){ 
					// 				$('#logfade')
					// 				.fadeOut(3000); 
					// 			}); </script>";
					// 	}
					// }
				?>
				
            	<button type="submit" name="submit" class="btn">LOGIN</button>
                <a href="#" style="display:block;">Forgot Password?</a>
            </form>
        </div>
    </div>

</x-layout>