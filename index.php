<?php
  include("lib/settings.php");
  include("lib/board.php")
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="viewport" content="width=device-width, initial-scale= 1.0">
  <meta http-equiv="content-type" charset="utf-8">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <title>和大掲示板</title>
</head>

<body class="min-h-screen flex flex-col">
  <header class="top-0 z-50 w-full text-gray-600 bg-white border-b-2 border-gray-100 lg:fixed">
    <div class="py-3 mx-auto px-4 container max-w-5xl sm:text-left text-center">
      <h1 class="ml-3 sm:text-xl text-lg">
        和大掲示板
      </h1>
    </div>
  </header>

  <section class="container px-4 mx-auto lg:max-w-6xl lg:mt-12 mb-auto">
    <?php foreach((array)$BOARD as $index => $DATA): ?>
    <form class="flex justify-between border-b py-3" method="post">
      <div class="max-w-sm sm:max-w-lg xl:max-w-2xl">
        <p class="font-bold">
          <?php echo $index + 1 ?>
        </p>
        <p>
          <?php echo h($DATA[2]); ?>
        </p>
      </div>
      <div>
        <?php echo $DATA[1]; ?>
        <input type="hidden" name="del" value="<?php echo $DATA[0]; ?>">
        <input class="cursor-pointer" type="submit" value="削除">
      </div>
    </form>
    <?php endforeach; ?>


  </section>

  <!-- form -->
  <form method="post" class="container mx-auto lg:max-w-6xl lg:mt-12 p-1 pr-0 flex items-center mb-6">
    <input class="block border-2 flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 w-full" type="text"
      name="txt" placeholder="...">
    <input class="block cursor-pointer bg-transparent py-2 px-4 border rounded" type="submit" value="書き込む">
  </form>