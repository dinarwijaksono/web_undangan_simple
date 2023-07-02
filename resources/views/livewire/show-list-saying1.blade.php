<div>
    <?php foreach ($listSaying as $say) : ?>
        <div class="p-2 bg-slate-200 rounded-md mb-3">
            <?php if ($say->confirmation == "Hadir") : ?>
                <h4 class="font-semibold text-start mb-2 text-[16px]"><?= $say->name ?> <span class="inline-block p-1 rounded bg-success font-bold text-white text-[10px]">Hadir</span>
                </h4>
            <?php elseif ($say->confirmation == "Belum Pasti") : ?>
                <h4 class="font-semibold text-start mb-2 text-[16px]"><?= $say->name ?> <span class="inline-block p-1 rounded bg-info font-bold text-white text-[10px]">Belum Pasti</span>
                </h4>
            <?php else : ?>
                <h4 class="font-semibold text-start mb-2 text-[16px]"><?= $say->name ?> <span class="inline-block p-1 rounded bg-danger font-bold text-white text-[10px]">Tidak Hadir</span>
                </h4>
            <?php endif; ?>

            <p class="text-start mx-2 mb-2 text-[13px]"><?= $say->message ?></p>

            <p class="text-end text-[12px] "><?= date('d M Y', $say->created_at / 1000); ?></p>
        </div>
    <?php endforeach; ?>

</div>