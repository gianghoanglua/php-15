<?php
$zend = array(
    'php' => 127,
    'zend' => 20,
    'html' => 32,
    'type' => 12,
    'javascript' => 80
);

// Input: Danh sách khóa học
// Requirement: In ra khóa học có thời lượng video nhiều nhất
// Output: Tên khóa học - thời lượng
//                  php - 127

$zend = ['php' => 127, 'zend' => 20, 'html' => 32, 'type' => 162, 'javascript'=> 800];

// tìm kiếm viedo có thời nhiều nhất qua value
$time = max($zend);

// tìm kiếm tên khóa học tương ứng thời lượng video
$name = array_search($time, $zend);
echo ucfirst($name) . " - " . $time;



