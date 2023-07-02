<div>

    <?php if (session()->has('createSuccess')) : ?>
        <div class="text-[14px] text-green-500 bg-slate-100 shadow-md border border-green-500 p-2 rounded mb-2">
            <p><?= session()->get('createSuccess') ?></p>
        </div>
    <?php endif; ?>

    <div class="text-start text-[13px] mb-3">
        <label for="name" class="block mb-1">Nama</label>
        <input class="border border-zinc-300 w-full rounded py-1 px-2" type="text" wire:model="name" id="name" placeholder="Nama">
        @error('name')
        <p class="text-danger italic"><?= $message ?></p>
        @enderror
    </div>

    <div class="text-start text-[13px] mb-3">
        <label class="block mb-1" for="confirmation">Konfirmasi kehadiaran</label>
        <select class="border border-zinc-300 w-full rounded py-1 px-2 bg-white" wire:model="confirmation" id="confirmation">
            <option selected>Pilih</option>
            <option value="Hadir">Hadir</option>
            <option value="Belum pasti">Belum pasti</option>
            <option value="Tidak hadir">Tidak hadir</option>
        </select>
        @error('confirmation')
        <p class="text-danger italic"><?= $message ?></p>
        @enderror
    </div>

    <div class="text-start text-[13px] mb-3">
        <label class="block mb-1" for="message">Ucapan / Doa</label>
        <textarea class="border border-zinc-300 w-full rounded py-1 px-2" wire:model="message" id="message" rows="4"></textarea>
        @error('message')
        <p class="text-danger italic"><?= $message ?></p>
        @enderror
    </div>

    <div class="justify-end text-[13px] flex mb-3">
        <div class="basis-1/4">
            <button type="button" wire:click="storeSaying" class="w-full bg-blue-600 px-2 py-1 rounded text-white ">Kirim</button>
        </div>
    </div>
</div>