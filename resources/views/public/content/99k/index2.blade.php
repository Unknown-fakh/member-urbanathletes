<x-main specialPage=true>
  @push('script')
  {{-- <script src="/js/coba.js"></script> --}}
  <script src="https://cdn.tailwindcss.com"></script>
  @endpush
  <div class="2xl:container font-FuturaBold">
    <div class="w-full aspect-auto bg-[url('/image/promo/199/bg_dapatkan_akses.png')] lg:bg-cover lg:bg-center md:bg-cover md:bg-center bg-cover bg-no-repeat bg-center relative">
      <div class="p-4 grid md:grid-cols-2 items-center bg-white/90 w-full aspect-auto relative">
        <div class="my-8 lg:ml-4 text-white lg:order-first md:order-first">
          <h3 class="leading-snug font-FuturaBold lg:text-5xl md:text-3xl lg:text-left md:text-left text-2xl text-center font-semibold bg-clip-text bg-gradient-to-r text-[#000000] italic uppercase">
            GYM PREMIUM <br> OLAHRAGA FULL SENYUM
          </h3>
          <div class="text-2xl md:text-3xl">
            <h4 class="leading-snug font-AmpleSoft lg:text-2xl md:text-xl text-xl lg:text-justify md:text-justify text-center font-medium text-[#000000] my-4 md:my-8">
              Best Deal Membership!<br>Mulai perubahan untuk capai body goals-mu dalam satu klik !
            </h4>
          </div>
          <div class="grid lg:place-items-start md:place-items-start place-items-center py-6">
            <button id="btn-submit" class="
                      py-2 px-4 rounded-xl bg-red-600 uppercase font-bold
                      hover:shadow hover:shadow-red-400 hover:bg-red-700
                      transition-all duration-300 font-FuturaBold lg:text-sm
                    ">
              Daftar Sekarang
            </button>
          </div>
        </div>
        <div class="p-4 w-full lg:order-last md:order-last order-first">
          <img class="w-full max-w-lg mx-auto" src="{{ url('/image/promo/99/99k-asset.png')}}" alt="Mis UN">
        </div>
      </div>
    </div>


    <div class="mx-auto max-w-5xl text-center px-4 py-8">
      <h2 class="my-4 md:my-6 italic font-black text-xl md:text-4xl">HAJAR LEMAKMU ! BUKAN DOMPETMU !</h2>
      <p class="md:text-2xl font-AmpleSoft font-black">Membership terjangkau khusus bagi kamu yang mau cobain ngegym ditempat bonafit, tapi dana lagi pas-pasan. Dapatkan membership 14 hari dengan harga terjangkau. rasakan pengalaman ngegym yang berbeda dengan standar Gym Internasional</p>
    </div>

    <div class="p-4 w-full aspect-auto bg-[url('/image/promo/288/bgMain1.png')] bg-cover relative h-44 md:h-[23rem] lg:h-[26rem]">
      <div class="max-w-lg lg:max-w-3xl
          leading-snug font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase
          absolute bottom-0 py-4 md:p-8 md:text-2xl lg:p-12 lg:text-4xl
        ">
        Akses lebih dari 200 kelas terjadwal setiap minggunya
      </div>
    </div>

    <div class="bg-black relative">
      <div class="relative p-4 w-full max-w-xl lg:max-w-4xl aspect-auto bg-[url('/image/promo/288/bgMain2.png')] bg-cover h-44 sm:h-72 md:h-[23rem] lg:h-[26rem]">
        <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-t sm:bg-gradient-to-l from-black md:max-w-3xl lg:max-w-5xl"></div>
      </div>
      <div class="max-w-xs md:max-w-lg px-4 mx-auto
          sm:absolute right-0 top-0 bottom-0 
          py-4 md:pl-8 md:text-2xl md:grid md:items-center
        ">
        <div class="py-8">
          <h2 class="leading-snug font-extrabold text-red-700 italic uppercase">FREE</h2>
          <h2 class="leading-snug font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase">
            Tes komposisi lemak tubuh dengan In Body
          </h2>
          <div class="pl-4 my-2 tracking-widest">
            <ul class="list-disc text-[#F0BE2E]">
              <li>
                <p class="text-white font-thin text-sm">Hitung komposisi lemak</p>
              </li>
              <li>
                <p class="text-white font-thin text-sm">Massa otot</p>
              </li>
              <li>
                <p class="text-white font-thin text-sm">Berat & kekuatan tulang</p>
              </li>
              <li>
                <p class="text-white font-thin text-sm">Hitung usia metabolisme tubuh</p>
              </li>
              <li>
                <p class="text-white font-thin text-sm">Keseimbangan massa otot & lemak</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>


    <div class="relative min-h-[20rem] flex">
      <div class="w-full min-h-full bg-[url('/image/promo/288/bgDaftarSecondary.png')] bg-cover bg-center">
        <div class="z-40">

        </div>
        <div class="absolute top-0 bottom-0 left-0 right-0 bg-white/90 items-center text-center flex flex-row justify-center">
          <div class="px-4">
            <h3 class="leading-snug font-extrabold bg-clip-text text-[#000000] italic uppercase sm:text-xl lg:text-3xl">
              TERBATAS UNTUK 50 ORANG PENDAFTAR PERTAMA ! <br />
              HARI INI !
            </h3>
            <div class="grid items-center py-4">
              <button id="btn-submit" class="mx-auto text-white
                      py-2 px-4 rounded-xl bg-red-600 text-base uppercase font-thin
                      hover:shadow hover:shadow-red-400 hover:bg-red-700
                      transition-all duration-300
                    ">
                Daftar Sekarang
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="my-8 px-8">
      <h2 class="text-xl md:text-3xl text-center font-black italic leading-snug text-transparent bg-clip-text bg-black text-shadow-lg">CLASSES & FACILITIES</h2>
      <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-3 pt-8 md:px-12 gap-2">
        <div class="lg:block md:block hidden col-span-2 row-span-2 relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/1.png')}}" alt="News Urban Athletes">
        </div>
        <div class="lg:hidden md:hidden block relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/1.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/2.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/3.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/4.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/5.png')}}" alt="News Urban Athletes">
        </div>
        <div class="relative group overflow-hidden drop-shadow">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/classes/6.png')}}" alt="News Urban Athletes">
        </div>
      </div>
    </div>

    <div class="my-12 px-8">
      <h2 class="text-xl md:text-3xl text-center font-black italic leading-snug text-transparent bg-clip-text bg-black text-shadow-lg">URBAN ATHLETES CLUBS</h2>
      <div class="flex flex-wrap lg:flex-nowrap py-4 justify-around">
        <div class="m-4 w-full max-w-[280px] lg:max-w-sm px-2 relative">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/clubs/1.png')}}" alt="clubs Urban Athletes">
          <div class="p-4 font-AmpleSoft">
            <h3 class="text-xl font-FuturaBold italic pb-4">URBAN ATHLETES GUNAWANGSA MERR</h3>
            {{-- <div class="flex items-center space-x-4 px-2">
                <i class="fa-solid fa-phone text-sm"></i>
                <p>(031) 51163660 </p>
              </div>
              <div class="flex items-start space-x-4 px-2 my-2">
                <i class="fa-solid fa-location-dot text-sm pt-1"></i>
                <p>Jl. Mayjend. Jonosewojo No.9, Pradahkalikendal, Kec. Dukuhpakis, Kota Surabaya, Jawa Timur 60216</p>
              </div> --}}
          </div>
          <div class="">
            <a href="https://goo.gl/maps/cL9JFBqttF9mavmr8" target="_blank" class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] py-2">
              <button class="w-full">Lihat Lokasi</button>
            </a>
          </div>
        </div>
        <div class="m-4 w-full max-w-[280px] lg:max-w-sm px-2 relative">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/clubs/2.png')}}" alt="clubs Urban Athletes">
          <div class="p-4 font-AmpleSoft">
            <h3 class="text-xl font-FuturaBold italic pb-4">URBAN ATHLETES GUNAWANGSA TIDAR</h3>
            {{-- <div class="flex items-center space-x-4 px-2">
                <i class="fa-solid fa-phone text-sm"></i>
                <p>(031) 99252900 </p>
              </div>
              <div class="flex items-start space-x-4 px-2 my-2">
                <i class="fa-solid fa-location-dot text-sm pt-1"></i>
                <p>Jl. Tidar No.350, Tembok Dukuh, Kec. Bubutan, Kota Surabaya, Jawa Timur 60173</p>
              </div> --}}
          </div>
          <div class="">
            <a href="https://goo.gl/maps/YPkvi67RBMGurZv57" target="_blank" class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] py-2">
              <button class="w-full">Lihat Lokasi</button>
            </a>
          </div>
        </div>
        <div class="m-4 w-full max-w-[280px] lg:max-w-sm px-2 relative">
          <img class="object-cover object-center w-full mx-auto transition-all duration-300" src="{{ url('/image/promo/288/clubs/3.png')}}" alt="clubs Urban Athletes">
          <div class="p-4 font-AmpleSoft">
            <h3 class="text-xl font-FuturaBold italic pb-4">URBAN ATHLETES LENMARC MALL</h3>
            {{-- <div class="flex items-center space-x-4 px-2">
                <i class="fa-solid fa-phone text-sm"></i>
                <p>(031) 87853222 </p>
              </div>
              <div class="flex items-start space-x-4 px-2 my-2">
                <i class="fa-solid fa-location-dot text-sm pt-1"></i>
                <p>Jl. Raya Kedung Baruk No.96, Kedung Baruk, Kec. Rungkut, Kota Surabaya, Jawa Timur 60298</p>
              </div> --}}
          </div>
          <div class="">
            <a href="https://goo.gl/maps/54V2ZzUrBqrFktpc6" target="_blank" class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] py-2">
              <button class="w-full">Lihat Lokasi</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    {{-- Footer --}}
    <div class="bg-black pb-12 relative">
      <div class="grid bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] pt-4 px-4">
        <div class="xl:w-3/5 lg:ml-auto lg:order-first md:order-first order-last">
          <div class="max-w-lg lg:max-w-xl ml-auto xl:mx-0">
            <h3 class="text-2xl italic lg:text-left md:text-left text-center">URBAN ATHLETES ADALAH GYM DENGAN PROTOKOL COVID-19 PERTAMA DAN TERJAMIN DI SURABAYA!</h3>
            <div class="grid items-center lg:place-items-start md:place-items-start place-items-center py-4">
              <button id="btn-submit" class="text-white items-center 
                      py-2 px-4 rounded-xl bg-red-600 text-base uppercase font-thin
                      hover:shadow hover:shadow-red-400 hover:bg-red-700
                      transition-all duration-300
                    ">
                Daftar Sekarang
              </button>
            </div>
          </div>
        </div>
        <div class="md:absolute top-0 bottom-0 left-0 lg:left-36 p-4 order-first">
          <img class="w-68 md:w-56" src="{{ url('/image/promo/99/99k-asset-2.png')}}" alt="clubs Urban Athletes">
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div id="tnc-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full inset-0 h-modal h-full pb-4">
    <div class="relative p-4 w-full max-w-4xl h-auto mx-auto">
      <!-- Modal content -->
      <div class="relative bg-white rounded-lg shadow mt-12">
        <!-- Modal body -->
        <div class="p-6 space-y-6 relative">
          <button type="button" id="btn-close-modal" data-modal-toggle="large-modal" class="text-white bg-red hover:text-gray-900 rounded-full text-sm p-2 ml-auto inline-flex items-center
                absolute -top-3 -right-3 bg-red-600
              ">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
          <p class="text-3xl font-FuturaBold italic font-semibold">Syarat & Ketentuan</p>
          <ol class="list-decimal px-4">
            <li class="py-2">
              Membership 99k berlaku Single Club dan mendapatkan fasilitas gym selama 14 hari berturut-turut.
            </li>
            <li class="py-2">
              Membership ini tidak mengikat setelah 14 hari usai.
            </li>
            <li class="py-2">
              Hanya berlaku untuk 1x transaksi, tidak dapat di ulang dan tidak dapat pindah club.
            </li>
            <li class="py-2">
              Calon member berusia minimum 18 tahun.
            </li>
            <li class="py-2">
              Membership hanya diberikan kepada New Join Member atau belum pernah join
              membership maupun trial di salah satu cabang dalam kurun waktu 6 bulan terakhir.
            </li>
            <li class="py-2">
              Fasilitas yang didapat oleh member sama seperti regular membership yaitu : <br>
              a. Free In-Body Check     c. Free Access All Classes & Exercises <br> e. Free Access kolam renang/sauna. <br>
              b. Free 1x PT Session     d. Latihan mandiri <br>
            </li>
            <li class="py-2">
              Membership ini Non-Refundable atau tidak dapat diuangkan
            </li>
            <li class="py-2">
              Membership akan aktif setelah diaktifkan oleh member melalui Aplikasi.
            </li>
            <li class="py-2">
              Membership dapat langsung diaktifkan setelah pembayaran selesai.
            </li>
            <li class="py-2">
              Start Date dapat ditunda penggunaannya maksimal 7 hari setelah tanggal pembayaran.
              (setelah lewat hari ke-7 setelah pembayaran, membership akan aktif secara otomatis dan
              berjalan hingga 14 hari kedepan)
            </li>
          </ol>

          <div class=" flex items-center">
            <input type="checkbox" value="1" name="agree" id="agree" onchange="agree(this)">
            <label for="agree" class="mx-4">Saya Setuju dengan Syarat & Ketentuan</label>
          </div>
        </div>
        <!-- Modal footer -->
        <div class="flex items-center justify-center p-6 space-x-2 rounded-b border-t border-gray-200 font-FuturaBold">
          <a href="{{ route('99k.daftar') }}" target="_blank">
            <button id="btn-agree" class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] hover:from-yellow-500 hover:to-yellow-200 py-1 px-6 rounded-lg mx-4 text-black text-lg uppercase hidden" type="button">Lanjut Daftar</button>
          </a>
          <button id="btn-agree2" class="bg-gradient-to-r from-[#F0BE2E]/60 to-[#FCF086]/60 py-1 px-6 rounded-lg mx-4 text-black text-lg uppercase" disabled type="button">Lanjut Daftar</button>
        </div>
      </div>
    </div>
  </div>

  @push('script')
  <script>
    const btnSubmit = document.querySelectorAll('#btn-submit');
    const tncModal = document.getElementById('tnc-modal');
    const btnCloseModal = document.getElementById('btn-close-modal');
    const btnAgree = document.getElementById('btn-agree');
    const btnAgree2 = document.getElementById('btn-agree2');
    const form = document.getElementById('form');
    const agreeCheck = document.getElementById('agree');

    function submitFun(el) {
      el.addEventListener('click', () => {
        // el.classList.add('hidden');
        tncModal.classList.remove('hidden');
      })
    }

    btnSubmit.forEach((btn) => submitFun(btn))
    btnCloseModal.addEventListener('click', () => {
      btnSubmit.forEach((btn) => {
        btn.classList.remove('hidden')
      })
      tncModal.classList.add('hidden');
    })

    if (agreeCheck.checked) {
      btnAgree.classList.remove('hidden');
      btnAgree2.classList.add('hidden');
    }

    function agree(el) {
      if (el.checked) {
        btnAgree.classList.remove('hidden');
        btnAgree2.classList.add('hidden');
      } else {
        btnAgree.classList.add('hidden');
        btnAgree2.classList.remove('hidden');
      }
    }

    btnAgree.addEventListener('click', () => {
      // form.submit();
      tncModal.classList.add('hidden');
    });
  </script>
  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '482057213943898');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=482057213943898&ev=PageView&noscript=1" /></noscript>
  <script type="text/javascript">
    document.getElementById('btn-submit').addEventListener('click', function() {
      fbq('track', 'CompleteRegistration');
    }, false);
  </script>
  <!-- End Meta Pixel Code -->
  @endpush
</x-main>