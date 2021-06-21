@extends('layout.master')

@section('content')
<div id="peminjam">
    <h4>Data Peminjam</h4>
    <?php
    if (!empty($peminjam)) :
    ?>
        <ul>
            <?php foreach ($peminjam as $data) : ?>
                <li><?= $data ?></li>
            <?php endforeach ?>
        </ul>
    <?php
    else :
    ?>
        <p>Data peminjam kosong.</p>
    <?php endif ?>
</div>

@endsection