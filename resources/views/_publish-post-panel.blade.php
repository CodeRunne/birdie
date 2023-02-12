<div class="border border-slate-200 rounded-md">
    <form action="/birdie" method="POST">
        @csrf

        <textarea name="body" class="w-full form-textarea h-20 rounded-md resize-none text-gray-900 px-2 py-1" id="" cols="30" rows="10" style="outline: none;" placeholder="Write down your birds?" required></textarea>
        
        <hr class="mt-2 bg-gray-50 mx-2 border border-gray-200">

        <footer class="flex justify-between pb-2 px-3">
            <img src="/images/img (1).jpg" class="rounded-full w-[40px] h-[40px] object-cover mr-2" alt="">
            <button type="submit" class="bg-red-400 rounded shadow-md px-3 py-2 text-white text-md">Post Bird!</button>
        </footer>
    </form>
</div>