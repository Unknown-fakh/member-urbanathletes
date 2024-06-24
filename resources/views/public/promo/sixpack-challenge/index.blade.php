<x-main specialPage=true>
    @push('script')
      {{-- <script src="/js/coba.js"></script> --}}
      <script src="https://cdn.tailwindcss.com"></script>
    @endpush
    <div class="2xl:container">
      <div class="p-4 w-full aspect-auto bg-[url('/image/promo/sixpack-challenge/banner-sixpack.png')] lg:bg-cover lg:bg-center md:bg-cover md:bg-center bg-cover bg-center relative">
        <div class="container grid md:grid-cols-2 items-center">
          <div class="my-8 lg:ml-4 text-white lg:order-first md:order-first">
            <h3 class="leading-snug font-FuturaBold lg:text-5xl md:text-3xl lg:text-left md:text-left text-2xl text-center font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase">
                6 minggu challenge BAKAR LEMAK PERUT
            </h3>
            <div class="text-2xl md:text-3xl">
              <h4 class="leading-snug font-AmpleSoft lg:text-2xl md:text-xl text-xl text-justify font-medium my-4 md:my-8">
                Ikuti program Sixpack Challenge dan raih body shapemu hanya dalam 6 minggu!!!
              </h4>
            </div>
            <div class="grid lg:place-items-start md:place-items-start place-items-center py-6">
              <a href="{{ route('sixpack-challenge.daftar') }}">
              <button id="btn-beli"
                class="
                  py-2 px-4 rounded-xl bg-red-600 uppercase font-bold
                  hover:shadow hover:shadow-red-400 hover:bg-red-700
                  transition-all duration-300 font-FuturaBold lg:text-sm
                "
              >
                Beli Modul Challenge
              </button>
              </a>
            </div>
          </div>
          <div class="p-4 w-full lg:order-last md:order-last order-first">
            <img class="w-full max-w-lg mx-auto" src="{{ url('/image/promo/sixpack-challenge/Logo-Six-Pack-06.png')}}" alt="Mis UN">
          </div>
        </div>
      </div>
  
      
      <div class="mx-auto max-w-5xl text-center px-4 py-8">
        <h2 class="my-4 md:my-6 italic font-FuturaBold font-extrabold text-[24px]">JOIN CHALLENGE UNTUK RAIH SIXPACKMU HANYA DALAM 6 MINGGU!!!</h2>
        <p class="lg: text-xl md:text-xl font-AmpleSoft font-medium">Lemak perut anda sudah tebal dan mulai meresahkan? pingin bakar lemaknya tapi gak tau caranya? sudah ngegym tapi gak kurus-kurus? mungkin masalah anda adalah tidak punya program latihan dan diet yang tepat. Dapatkan modul latihan untuk enam minggu ! program latihan dan diet langsung dari profesional Urban Athletes!</p>
      </div>

      <div class="p-4 w-full h-full aspect-auto bg-[url('/image/promo/sixpack-challenge/lp-banner1.png')] bg-cover bg-center relative">
        <div class="container grid md:grid-rows-2 items-center">
          <h2 class="font-FuturaBold lg:text-[30px] md:text-[24px] text-base text-left leading-snug font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase">
            DAPATKAN EXCLUSIVE MODULE LATIHAN <br> DAN DIET UNTUK PEMULA
          </h2>         
          <div class="pl-4 my-2 tracking-widest font-AmpleSoft lg:text-[22px] lg:text-[22px] md:text-sm text-xs">
            <ul class="list-disc text-[#F0BE2E]">
              <li>
                <p class="text-white font-thin">Exclussive Training Modul</p>
              </li>
              <li>
                <p class="text-white font-thin">Exclussive Diet Guide</p>
              </li>
              <li>
                <p class="text-white font-thin">Exclussive Training Menu Video</p>
              </li>
            </ul>
          </div>
          <h2 class="font-FuturaBold lg:text-[30px] md:text-[30px] text-base leading-snug font-extrabold my-4 md:my-8 italic uppercase text-white">HANYA IDR 488K</h2>
          <div class="flex items-center py-4">
            <a href="{{ route('sixpack-challenge.daftar') }}">
            <button id="btn-beli"
              class="
                py-2 px-4 rounded-xl bg-red-600 text-white uppercase font-bold
                hover:shadow hover:shadow-red-400 hover:bg-red-700
                transition-all duration-300 font-FuturaBold lg:text-sm md:text-sm text-xs
              "
            >
              Beli Modul Challenge
            </button>
            </a>
          </div>                  
        </div>
      </div>

      <div class="bg-black relative">
        <div class="relative p-4 w-full max-w-xl lg:max-w-4xl aspect-auto bg-[url('/image/promo/sixpack-challenge/banner-sixpack-3.png')] bg-cover h-44 sm:h-72 md:h-[340px] lg:h-[500px]">
          <div class="absolute top-0 bottom-0 left-0 right-0 bg-gradient-to-t sm:bg-gradient-to-l from-black md:max-w-3xl lg:max-w-5xl"></div>
        </div>
        <div class="max-w-xs md:max-w-lg px-4 mx-auto
          sm:absolute right-0 top-0 bottom-0 
          py-4 md:pl-8 md:text-2xl md:grid md:items-center
        ">
          <div class="py-0">
            <h2 class="leading-snug font-extrabold font-FuturaBold lg:text-[30px] md:text-[24px] text-base text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase  text-[30px]">
              Challenge Full Package
            </h2>
            <div class="pl-4 my-2 tracking-widest font-AmpleSoft lg:text-[22px] md:text-sm text-xs">
              <ul class="list-disc text-[#F0BE2E]">
                <li>
                  <p class="text-white font-thin ">Exclussive Training Modul</p>
                </li>
                <li>
                  <p class="text-white font-thin ">Exclussive Diet Guide</p>
                </li>
                <li>
                  <p class="text-white font-thin ">Exclussive Motivation Group</p>
                </li>
                <li>
                  <p class="text-white font-thin ">Exclussive Training Menu Video</p>
                </li>
                <li>
                  <p class="text-white font-thin ">Free consultation with our PT & diet coach on group</p>
                </li>
                <li>
                  <p class="text-white font-thin ">Membership 6 weeks</p>
                </li>
                <li>
                  <p class="text-white font-thin ">Specified merchandise</p>
                </li>
              </ul>
            </div>
            <h2 class="font-FuturaBold lg:text-[30px] md:text-[24px] text-base leading-snug font-extrabold italic my-4 uppercase text-white">MULAI DARI IDR 7.200K</h2>
            <div class="flex items-center">
              <a href="https://wa.me/+628179188880">
              <button id="btn-konsultasi"
                class="
                  py-2 px-4 rounded-xl bg-red-600 text-white uppercase font-bold
                  hover:shadow hover:shadow-red-400 hover:bg-red-700
                  transition-all duration-300 font-FuturaBold lg:text-sm md:text-sm text-xs
                "
              >
                Konsultasi Sekarang
              </button>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center items-center py-4">
        <p class="font-FuturaBold text-black text-[30px] text-center font-extrabold italic uppercase">
          APA KATA MEREKA YANG SUDAH MEMBUKTIKANYA
        </p>
      </div>
      <div class="container content-center items-center lg:px-16 py-10">
        <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/HvK6iCGFKP0?autoplay=1&mute=1&playlist=HvK6iCGFKP0&loop=1">
        </iframe>
      </div>
      <div class="relative min-h-[20rem] flex mb-10">
        <div class="w-full min-h-full bg-[url('/image/promo/288/bgDaftarSecondary.png')] bg-cover bg-center">
          <div class="z-40">
            
          </div>
          <div class="absolute top-0 bottom-0 left-0 right-0 bg-black/80 items-center text-center flex flex-row justify-center">
            <div class="px-4">
              <h3 class="font-FuturaBold lg:text-[40px] md:text-xl leading-snug font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] italic uppercase sm:text-xl lg:text-3xl">
                TERBATAS!!! HANYA UNTUK 50 ORANG <br/>PENDAFTAR PERTAMA HARI INI !
              </h3>
              <div class="flex items-center py-4">
                <a href="{{ route('sixpack-challenge.daftar') }}">
                <button id="btn-beli"
                  class="mx-auto text-white
                      py-2 px-4 rounded-xl bg-red-600 text-base uppercase font-bold
                      hover:shadow hover:shadow-red-400 hover:bg-red-700
                      transition-all duration-300 font-FuturaBold text-sm
                    "
                >
                  Beli Modul Challenge
                </button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>      
      {{-- Footer --}}
      <div class="bg-black pb-12 relative">
        <div class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] px-4">
          <div class="xl:w-3/5 lg:ml-auto">
            <div class="max-w-lg lg:max-w-xl ml-auto xl:mx-0">
              <h3 class="text-2xl italic font-extrabold font-FuturaBold text-[30px] py-8">URBAN ATHLETES ADALAH GYM DENGAN PROTOKOL COVID-19 PERTAMA DAN TERJAMIN DI SURABAYA!</h3>
            </div>
          </div>
          <div class="md:absolute bottom-0 left-0 lg:left-36">
            <img class="w-48 md:w-56" src="{{ url('/image/promo/288/fotoFooter.png')}}" alt="clubs Urban Athletes">
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
            <button type="button" id="btn-close-modal" data-modal-toggle="large-modal"
              class="text-white bg-transparent hover:text-gray-900 rounded-full text-sm p-2 ml-auto inline-flex items-center
                absolute -top-3 -right-3 bg-red-600
              "
            >
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
              </svg>
              <span class="sr-only">Close modal</span>
            </button>
            <p class="text-3xl font-FuturaBold italic font-semibold">Syarat & Ketentuan</p>
            <ol class="list-decimal px-4">
              <li class="py-2">
                Promo 288K ini khusus untuk New Join Member atau ex-member dengan masa aktif kadaluarsa lebih dari 6 bulan, dan tidak bisa diperpanjang dengan promo yang sama.
              </li>
              <li class="py-2">
                Cabang yang dipilih tidak bisa diganti setelah proses registrasi selesai. Promo ini hanya berlaku untuk non member yang belum pernah melakukan trial di Urban Athletes dan berusia di atas 18 tahun.
              </li>
              <li class="py-2">
                Kami tidak bertanggung jawab atas kelalaian atau kehilangan sejumlah uang pribadi calon member dan tidak ada pengembalian dana dengan alasan apapun.
              </li>
              <li class="py-2">
                Pengaktifan membership ini paling lambat 10 hari setelah pembayaran selesai di cabang yang di pilih.
              </li>
            </ol>
  
            <div class=" flex items-center">
              <input type="checkbox" value="1" name="agree" id="agree" onchange="agree(this)">
              <label for="agree" class="mx-4">Saya Setuju dengan Syarat & Ketentuan</label>
            </div>
          </div>
          <!-- Modal footer -->
          <div class="flex items-center justify-center p-6 space-x-2 rounded-b border-t border-gray-200 font-FuturaBold">
            <a href="{{ route('sixpack-challenge.daftar') }}">
              <button id="btn-agree" class="bg-gradient-to-r from-[#F0BE2E] to-[#FCF086] hover:from-yellow-500 hover:to-yellow-200 py-1 px-6 rounded-lg mx-4 text-black text-lg uppercase hidden" type="button" >Lanjut Daftar</button>
            </a>
            <button id="btn-agree2" class="bg-gradient-to-r from-[#F0BE2E]/60 to-[#FCF086]/60 py-1 px-6 rounded-lg mx-4 text-black text-lg uppercase" disabled type="button" >Lanjut Daftar</button>
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
            el.classList.add('hidden');
            tncModal.classList.remove('hidden');
          })
        }
  
        btnSubmit.forEach((btn) => submitFun(btn))
        btnCloseModal.addEventListener('click', () => {
          btnSubmit.forEach((btn) => {btn.classList.remove('hidden')})
          tncModal.classList.add('hidden');
        })
  
        if (agreeCheck.checked) {
          btnAgree.classList.remove('hidden');
          btnAgree2.classList.add('hidden');
        }
  
        function agree(el){
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
      <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '907245660654805');
        fbq('track', 'PageView');
      </script>
      <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=907245660654805&ev=PageView&noscript=1"
      /></noscript>
    @endpush
  </x-main>