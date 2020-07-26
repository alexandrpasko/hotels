  @if(session('error'))
    <div class="alert alert-danger text-center">
      {{ session('error') }}
    </div>
  @endif

  @if(session('success'))
    <div class="alert alert-success text-center">
      {{ session('success') }}
    </div>
  @endif
  
  <!-- if there are any form submition errors -->
  @if($errors->any())
    <div class="alert alert-danger text-center">
      Please review and correct form submission
    </div>
  @endif