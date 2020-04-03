<?php 
    Breadcrumbs::register('home', function ($breadcrumbs) {
        $breadcrumbs->push('Trang chủ', route('home'));
   });
   
   Breadcrumbs::register('tinhthanh', function ($breadcrumbs, $tinhthanh) {
       $breadcrumbs->parent('home');
       $breadcrumbs->push($tinhthanh->name, route('tinhthanh', ['id' => $tinhthanh->id]));
   });
   
   Breadcrumbs::register('quanhuyen', function ($breadcrumbs, $tinhthanh, $quanhuyen) {
       $breadcrumbs->parent('tinhthanh', $tinhthanh);
       $breadcrumbs->push($quanhuyen->name, route('quanhuyen', ['id' => $quanhuyen->id]));
   });
   
   Breadcrumbs::register('xaphuong', function ($breadcrumbs, $tinhthanh, $quanhuyen, $xaphuong) {
       $breadcrumbs->parent('quanhuyen', $tinhthanh, $quanhuyen);
       $breadcrumbs->push($xaphuong->name, route('xaphuong', ['id' => $xaphuong->id]));
   });
?>