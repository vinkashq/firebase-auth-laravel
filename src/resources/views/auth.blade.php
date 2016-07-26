<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>
    {{ getEnv('APP_NAME')}}
  </title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="/vinkas/firebase/auth.css" />
</head>
<body>
  <header id="header">
    <div class="text-center">
      <a href="/" class="logo"><img src="/images/logo.png" /></a>
    </div>
  </header>
  <div class="container">
    <div class="page-header text-center">
      <h1 class="h3">{{ getEnv('APP_NAME')}} account</h1>
    </div>
    <div id="noticeboard" class="noticeboard"></div>
  </div>

  <div class="auth container">
    <div class="row">
      <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 col-lg-offset-3 col-md-offset-2 col-sm-offset-1">
        <div class="row">
          <div class="col-sm-8 col-xs-10 col-sm-offset-2 col-xs-offset-1">
            <div id="firebaseui-auth-container"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://www.gstatic.com/firebasejs/3.2.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/3.2.0/firebase-auth.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script>
  var token = "{{ csrf_token() }}";
  var config = {
    apiKey: "{{ config('vinkas.firebase.auth.api_key') }}",
    authDomain: "{{ config('vinkas.firebase.auth.auth_domain') }}",
  };
  firebase.initializeApp(config);
  </script>
  @if (Auth::check())
  @else
  <script src='/vinkas/firebase/auth.js'></script>
  @endif
  <script>
  function notice(message) {
    $("#noticeboard").html('<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> ' + message + '</div>');
  }
  </script>
  <script src="https://www.gstatic.com/firebasejs/ui/live/0.4/firebase-ui-auth.js"></script>
  <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/live/0.4/firebase-ui-auth.css" />
  <script type="text/javascript">
  var uiConfig = {
    'signInSuccessUrl': '/',
    'signInOptions': [
      firebase.auth.GoogleAuthProvider.PROVIDER_ID,
      firebase.auth.FacebookAuthProvider.PROVIDER_ID,
      firebase.auth.TwitterAuthProvider.PROVIDER_ID,
      firebase.auth.GithubAuthProvider.PROVIDER_ID,
      firebase.auth.EmailAuthProvider.PROVIDER_ID
    ],
    'tosUrl': null,
    'callbacks': {
      'signInSuccess': function(currentUser, credential, redirectUrl) {
        if (currentUser.emailVerified) {
          auth(currentUser, token);
        } else {
          notice("{!! trans('vinkas.firebase.auth.warning_verify_email') !!}");
        }
        return false;
      }
    }
  };

  var ui = new firebaseui.auth.AuthUI(firebase.auth());
  ui.start('#firebaseui-auth-container', uiConfig);
  </script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
