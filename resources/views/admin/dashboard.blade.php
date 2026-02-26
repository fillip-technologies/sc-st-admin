@extends('admin.include.layout')

@section('title', 'Dashboard')

@section('content')

    <!-- ===================== STATS CARDS ===================== -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

        <!-- Total Users -->
        <div class="bg-white rounded-xl shadow p-6 border-l-4 border-blue-500">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-500">Total Hostels</p>
                    <h3 class="text-2xl font-bold mt-2">12</h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center">
                    <i class="fa-solid fa-hotel text-blue-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Active Bookings -->
        <div class="bg-white rounded-xl shadow p-6 border-l-4 border-green-500">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-500">Total Teachers</p>
                    <h3 class="text-2xl font-bold mt-2">2000</h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center">
                    <i class="fa-solid fa-person-chalkboard text-green-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Products -->
        <div class="bg-white rounded-xl shadow p-6 border-l-4 border-purple-500">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-500">Total Students</p>
                    <h3 class="text-2xl font-bold mt-2">10000</h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center">
                    <i class="fas fa-users text-purple-600 text-xl"></i>
                </div>
            </div>
        </div>

        <!-- Orders -->
        <div class="bg-white rounded-xl shadow p-6 border-l-4 border-yellow-500">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-500">Total Library</p>
                    <h3 class="text-2xl font-bold mt-2">23</h3>
                </div>
                <div class="w-12 h-12 rounded-full bg-yellow-100 flex items-center justify-center">
                    <i class="fa-solid fa-book text-yellow-600 text-xl"></i>
                </div>
            </div>
        </div>

    </div>


@endsection
<script>
document.addEventListener('DOMContentLoaded', function () {

  const modals = [
    //document.getElementById('noticeModal'),
    document.getElementById('noticeModal1'),
    document.getElementById('noticeModal2')
  ];

  const STORAGE_KEY = 'noticeSequenceShown';
  let index = 0;
  let timer = null;

  function showModal(i) {
    if (!modals[i]) return;

    modals[i].classList.remove('hidden');
    modals[i].classList.add('flex');

    // ⏱️ AUTO NEXT after 30 sec
    timer = setTimeout(nextModal, 30000);
  }

  function hideModal(i) {
    if (!modals[i]) return;

    modals[i].classList.add('hidden');
    modals[i].classList.remove('flex');
  }

  function nextModal() {
    clearTimeout(timer);
    hideModal(index);
    index++;

    if (index < modals.length) {
      showModal(index);
    } else {
      sessionStorage.setItem(STORAGE_KEY, 'true');
    }
  }

  if (!sessionStorage.getItem(STORAGE_KEY)) {

    // FIRST MODAL
    showModal(0);

    // image swap same as before
    setTimeout(() => {
      document.getElementById('noticeImg1').classList.add('hidden');
      document.getElementById('noticeImg2').classList.remove('hidden');
    }, 4800);

    // CLICK ALSO WORKS
    document.getElementById('noticeClose0').onclick = nextModal;
    document.getElementById('noticeOk0').onclick    = nextModal;

    document.getElementById('noticeClose1').onclick = nextModal;
    document.getElementById('noticeOk1').onclick    = nextModal;

    document.getElementById('noticeClose2').onclick = () => {
      clearTimeout(timer);
      hideModal(2);
      sessionStorage.setItem(STORAGE_KEY, 'true');
    };
    document.getElementById('noticeOk2').onclick = () => {
      clearTimeout(timer);
      hideModal(2);
      sessionStorage.setItem(STORAGE_KEY, 'true');
    };
  }

});
</script>
