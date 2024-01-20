<x-main specialPage=true title='Daftar GYM'>
  <x-layout_card_form>
    <form action="{{ route('99k.save') }}" method="post">
      @csrf
      {{-- @method('PUT') --}}
      <div class="flex justify-center border-b my-4 pb-4">
        <h2 class="text-3xl font-Futura">Daftar form GYM</h2>
      </div>
      <input type="hidden" name="kode" value="">
      @error('kode')
        <div id="kode" class="text-sm text-red-500">
            {{ $message }}
        </div>
      @enderror
      @if(session('alert'))
        <div class="p-4 w-full bg-red-400 rounded-md bg-opacity-40">
          <h3 class="mx-5 font-bold">{{session('alert')}}</h3>
        </div>
      @endif
      @if(session('success'))
        <div class="p-4 w-full bg-green-600 rounded-md bg-opacity-40" data-massage="{{session('success')}}" data-email="{{session('email')}}" id="success">
          <h3 class="mx-5 font-bold">Cek kotak masuk / spam email {{session('email')}} untuk melanjutkan pembayaran</h3>
        </div>
      @endif
      <div class="flex-none ">
        <label class="block mx-4 my-4">
          <span class="">Club</span>
          <select name="club_id" id="club_id" class="block border-0 border-b-2 w-full focus:border-black @error('nominal') border-red-300 @enderror">
            <option value="" >Select club</option> 
            @foreach ($clubs['rows'] as $club)
              <!-- @if ( $club['id'] != '1' && $club['id'] != '3' && $club['id'] != '6' && $club['id'] != '7' && $club['id'] != '8' ) -->
              @if ( $club['id'] != '3' && $club['id'] != '6' && $club['id'] != '7' && $club['id'] != '8' )
                @if ( old('club_id') == $club['id'] )
                  <option value="{{ $club['id'] }}" selected>{{ $club['name'] }}</option>
                @else
                  <option value="{{ $club['id'] }}">{{ $club['name'] }}</option> 
                @endif
              @endif
            @endforeach
          </select>
          @error('club')
            <div id="club" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <span class="">Nama Lengkap</span>
          <input name="nama" type="text" 
          value="{{ old('nama') }}"
          placeholder="Nama Lengkap"
          class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('nama') border-red-300 @enderror">
          @error('nama')
            <div id="nama" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <span class="">Nomer Whatsapp</span>
          <input name="nomor" type="text" 
          placeholder="6281089898989"
          value="{{ old('nomor') }}"
          class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('nomor') border-red-300 @enderror">
          @error('nomor')
            <div id="nomor" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        <label class="block mx-4 my-4">
          <span class="">Email</span>
          <input name="email" type="text" 
          placeholder="youremail@example.com"
          value="{{ old('email') }}"
          class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('email') border-red-300 @enderror">
          @error('email')
            <div id="email" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label>
        {{-- <label class="block mx-4 my-4">
          <span class="">Alamat</span>
          <input name="alamat" type="text" 
          placeholder="Alamat"
          value="{{ old('alamat') }}"
          class="block w-full px-0.5 border-0 border-b-2 focus:ring-0 focus:border-black @error('alamat') border-red-300 @enderror">
          @error('alamat')
            <div id="alamat" class="text-sm text-red-500">
                {{ $message }}
            </div>
          @enderror
        </label> --}}
      </div>
      <div class="flex justify-end my-4">
        <button id="btn-submit" class="bg-green-500 py-2 px-6 rounded-lg mx-4 text-white text-lg" type="submit">Claim Promo</button>
        <span id="btn-disabled" class="hidden">
          <button class="flex items-center bg-green-500 opacity-80 py-2 px-2 mx-4 rounded-lg text-white text-lg" disabled>
            <img class="w-7 h-7" src="{{ url('/image/icon/Loading-white.svg') }}" alt="Urban Athletes"/> 
            Proses...
          </button>
        </span>
      </div>
      <div class="border-t my-4 pb-4">
        <ul class="my-4 mx-4">
          <li>
            <a href="{{ route('order.search') }}" class="text-blue-500 underline">Cek Status Pembayaran</a>
          </li>
          <li>
            <a href="{{ route('99k.updateKode') }}" class="text-blue-500 underline">Generate Kode Baru</a>
          </li>
        </ul>
      </div>
    </form>
  </x-layout_card_form>

  @push('script')
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    let success = document.querySelector('#success');
    if (success) {
      Swal.fire(
        'Email Terkirim',
        success.getAttribute("data-massage")+'<br>'+success.getAttribute("data-email"),
        'success'
      )
    }
  </script>
    <!-- Meta Pixel Code -->
    {{-- <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '544863203544959');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=544863203544959&ev=PageView&noscript=1"
    /></noscript> --}}
    {{-- <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '482057213943898');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=482057213943898&ev=PageView&noscript=1"
    /></noscript>
    <script type="text/javascript">
      document.getElementById('btn-submit').addEventListener('click', function() {
      fbq('track', 'CompleteRegistration');
      }, false);
    </script> --}}
    <!-- End Meta Pixel Code -->
    {{-- <script>
      const btnSubmid = document.getElementById('btn-submit');
      // console.log(btnSubmid);
      btnSubmid.addEventListener("click", function (e) {
        const btnDisabled = document.getElementById('btn-disabled');
        btnDisabled.classList.toggle("hidden");
        btnSubmid.classList.toggle("hidden");
      });
    </script> --}}
  @endpush
</x-main>
