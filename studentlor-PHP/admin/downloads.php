<?php include '../includes/filesLogic.php'?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>Download files</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f0f0f0; margin: 0; padding: 0;">

<table style="width: 80%; margin: 20px auto; border-collapse: collapse; background-color: #fff; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
<thead>
    <th style="background-color: #007bff; color: #fff; padding: 10px; text-align: left;">ID</th>
    <th style="background-color: #007bff; color: #fff; padding: 10px; text-align: left;">Filename</th>
    <th style="background-color: #007bff; color: #fff; padding: 10px; text-align: left;">Size (in mb)</th>
    <th style="background-color: #007bff; color: #fff; padding: 10px; text-align: left;">Downloads</th>
    <th style="background-color: #007bff; color: #fff; padding: 10px; text-align: left;">Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td style="padding: 10px;"><?php echo $file['id']; ?></td>
      <td style="padding: 10px;"><?php echo $file['name']; ?></td>
      <td style="padding: 10px;"><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td style="padding: 10px;"><?php echo $file['downloads']; ?></td>
      <td style="padding: 10px;"><a href="downloads.php?file_id=<?php echo $file['id'] ?>" style="text-decoration: none; color: #007bff;">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>
