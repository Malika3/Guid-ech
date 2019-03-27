<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>  
     body{               /* desing d page font avec background boutique */
         margin: 0;    
         padding: 0;
         font-family: 'Comic sans MS';
         background: url("/images/backbtq1.jpg"); 
         background-position:center;
         background-size:cover;}
    .register-top{   /* positionnement de form */
        margin:30px;
        margin-left:350px;
        margin-right:100px;
       }
    .register-container{    /* design le forme */
        background:; 
        background-size:; 
        border:2px solid:#c44569 ;
        border-radius:8px; 
        margin:0 auto; 
        padding:50px;
        }
    .text-color{color:#130f40 ;margin-left:30px;}    /* coleur et postionnement de mot txt Guid-ech   */
    .text{    /* couleur de txt au dessus de form */
            color:#0c2461;
            margin-left:70px
          }
    


    </style>  
</head>
<body>

    <div class="col-sm-8 col-sm-4 col-sm-offset-2"> <!--col-sm-8--> 
         <div class="col-sm-12 col-sm-4"></div>
             <div class="col-sm-12 col-sm-4 register-top">  <!--class register-top--> 
          
                    <form class="form-horizontal register-container tb-padding"method="POST" action="{{ route('register') }}"> <!--forme avc methode post --> 
                        @csrf      <!--generation de token--> 
                       
                        <div class="form-group"> <!-- le champ text  Guid-ech -->
                                 <div class="col-sm-12">
                                     <h3 class="text"><span class="text-color">Guid-ech</span></h3>
                                 </div> 
                         </div>

                        <div class="form-group "> 
                            <label for="name" class="col-sm-4 col-sm-2 col-form-label ">Nom de la boutique:</label> <!-- le champ nom de boutique -->
                                 

                            <div class="col-sm-6 col-sm-2"> <!-- generation de erreurs de saisi-->
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block" ><!-- "help-block" est une classe de bootstrap pour pour indiquer un bloc de texte d'aide pour un contrôle de formulaire donné-->
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 col-sm-2 col-form-label ">E-mail de l'administrateur :</label> <!-- le champ Email de l'administartion de laboutique -->

                            <div class="col-sm-6 col-sm-2"> <!-- generation de erreurs de saisi-->
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block" ><!-- "help-block" est une classe de bootstrap pour pour indiquer un bloc texte d'aide pour un contrôle de formulaire donné-->
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 col-sm-2  col-form-label ">Password:</label> <!-- le champ mot de passe  -->

                            <div class="col-sm-6 col-sm-2 "> <!-- generation de erreurs de saisi-->
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group"> <!-- le champ confirmer le mot de passe -->
                            <label for="password-confirm" class="col-md-4 col-sm-2 col-form-label ">Confirm Password:</label>

                            <div class="col-sm-6 col-sm-2">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
              

              
                         <div class="form-group "> 
                            <label for="discribtion" class="col-md-4 col-sm-2 col-form-label " id="discribtion">Discription de la boutique </label>
                            <textarea class="form-control" rows="3"></textarea>

                         </div>

                         	
                               <!-- le champ de la discribtion -->
                         
                        </div>
                        <div class="form-group"> <!-- le champ de la catégorie -->
                        <label for="catégorie" class="col-md-4 col-sm-2 col-form-label ">La catégorie </label>
                        <div class="col-sm-6 col-sm-2">
                        <select class="form-group" name="catégorie" >
                         
                         <option value="#"> Femme</option>
                         <option value="#"> Homme</option>
                         <option value="#"> Enfant</option>
                         <option value="#"> Cosmétique</option>
                        
                        </select>
                        @if ($errors->has('catégorie')) <!-- generation des erreurs de saisi  -->
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('catégorie') }}</strong>
                                    </span>
                         @endif
                        </div>
                        </div>
                         <div class="form-group"> <!-- le champ de choisir la willaya -->
                        <label for="willaya" class="col-md-4 col-sm-2 col-form-label ">Willaya </label>
                        <div class="col-sm-6 col-sm-2">
                        <select class="form-group" name="étoiles" >
                         
                         <option value="#"> 1</option>
                         <option value="#"> 2</option>
                         <option value="#"> 3</option>
                         <option value="#"> 4</option>
                         <option value="#">5 </option>
                         <option value="#"> 6</option>
                         <option value="#"> 7</option>
                         <option value="#"> 8</option>
                         <option value="#"> 9</option>
                         <option value="#"> 10</option>
                         <option value="#"> 11</option>
                         <option value="#"> 12</option>
                         <option value="#"> 13</option>
                         <option value="#"> 14</option>
                         <option value="#"> 15</option>
                         <option value="#"> 16</option>
                         <option value="#"> 17</option>
                         <option value="#"> 18</option>
                         <option value="#"> 19</option>
                         <option value="#"> 20</option>
                         <option value="#"> 21</option>
                         <option value="#"> 22</option>
                         <option value="#"> 23</option>
                         <option value="#"> 24</option>
                         <option value="#"> 25</option>
                         <option value="#"> 26</option>
                         <option value="#"> 27</option>
                         <option value="#"> 28</option>
                         <option value="#"> 29</option>
                         <option value="#"> 30</option>
                         <option value="#"> 31</option>
                         <option value="#"> 32</option>
                         <option value="#"> 33</option>
                         <option value="#"> 34</option>
                         <option value="#"> 35</option>
                         <option value="#"> 36</option>
                         <option value="#"> 37</option>
                         <option value="#"> 38</option>
                         <option value="#"> 39</option>
                         <option value="#"> 40</option>
                         <option value="#"> 41</option>
                         <option value="#"> 42</option>
                         <option value="#"> 43</option>
                         <option value="#"> 44</option>
                         <option value="#"> 45</option>
                         <option value="#"> 46</option>
                         <option value="#"> 47</option>
                         <option value="#"> 48</option>
                        
                        
                        </select>
                        @if ($errors->has('willaya')) <!-- generation des erreurs de saisi  -->
                                    <span class="help-block" >
                                        <strong>{{ $errors->first('willaya') }}</strong>
                                    </span>
                         @endif
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit"    value="register" class="btn btn-danger  " >
                                    {{__('Register')}}
                                </button>
                            </div>
                        </div>


                    </form>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <h5 class="text"> Already have an account for your hotel <a href="#" > Sign In pro </a>
                    <h5 class="text"> You don't have an account as user ? <a href="{{ route('login') }}" > Log in </a>	
                   <h5 class="text"> Sing up as user <a href="{{ route('register') }}" > Sign up </a>
                    <h5 class="text"> Developed By "Guid-ech Team" <a href="www.esi-sba.dz" > ESI-SBA </a></h5>
                    <h5 class="text"> Mme B.klouche <a href="b.klouche@esi-sba.dz" > G-mail </a></h5>
               
            
                </div>
            </div>

         </body>
</html>