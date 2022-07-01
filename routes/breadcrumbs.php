<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

use function Ramsey\Uuid\v1;

// pt
Breadcrumbs::for('pt_dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('pt_dashboard'));
});

Breadcrumbs::for('pt_form', function (BreadcrumbTrail $trail) {
    $trail->push('Form', route('pt_form'));
});

Breadcrumbs::for('pt_hasil', function (BreadcrumbTrail $trail) {
    $trail->push('Form', route('pt_hasil'));
});

// admin
Breadcrumbs::for('admin_dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('admin_dashboard'));
});

Breadcrumbs::for('pertanyaan', function (BreadcrumbTrail $trail) {
    $trail->push('Pertanyaan', route('pertanyaan'));
});

Breadcrumbs::for('pertanyaan_kategori', function (BreadcrumbTrail $trail) {
    $trail->push('Kategori Pertanyaan', route('pertanyaan_kategori'));
});

Breadcrumbs::for('pertanyaan_tipe', function (BreadcrumbTrail $trail) {
    $trail->push('Tipe Pertanyaan', route('pertanyaan_tipe'));
});

Breadcrumbs::for('jawaban', function (BreadcrumbTrail $trail) {
    $trail->push('Jawaban', route('jawaban'));
});

Breadcrumbs::for('perguruan_tinggi', function (BreadcrumbTrail $trail) {
    $trail->push('Perguruan Tinggi', route('perguruan_tinggi'));
});

Breadcrumbs::for('pt_edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('pt_dashboard');
    $trail->push('Edit Perguruan Tinggi', route('pt_edit', $id));
});

// Home > Blog
Breadcrumbs::for('pertanyaan_tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('pertanyaan');
    $trail->push('Tambah Pertanyaan', route('pertanyaan_tambah'));
});

Breadcrumbs::for('pertanyaan_edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('pertanyaan');
    $trail->push('Edit Pertanyaan', route('pertanyaan_edit',$id));
});

Breadcrumbs::for('kategori_tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('pertanyaan_kategori');
    $trail->push('Tambah Kategori Pertanyaan', route('kategori_tambah'));
});

Breadcrumbs::for('kategori_edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('pertanyaan_kategori');
    $trail->push('Edit Kategori Pertanyaan', route('kategori_edit',$id));
});

Breadcrumbs::for('tipe_tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('pertanyaan_tipe');
    $trail->push('Tambah Tipe Pertanyaan', route('tipe_tambah'));
});

Breadcrumbs::for('tipe_edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('pertanyaan_tipe');
    $trail->push('Edit Tipe Pertanyaan', route('tipe_edit',$id));
});

Breadcrumbs::for('jawaban_tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('jawaban');
    $trail->push('Tambah Jawaban', route('jawaban_tambah'));
});

Breadcrumbs::for('jawaban_edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('jawaban');
    $trail->push('Edit Jawaban', route('jawaban_edit',$id));
});

Breadcrumbs::for('admin_pt_tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('perguruan_tinggi');
    $trail->push('Tambah Perguruan Tinggi', route('admin_pt_tambah'));
});

Breadcrumbs::for('admin_pt_edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('perguruan_tinggi');
    $trail->push('Edit Perguruan Tinggi', route('admin_pt_edit',$id));
});

// // Home > Blog > [Category]
// Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
//     $trail->parent('blog');
//     $trail->push($category->title, route('category', $category));
// });