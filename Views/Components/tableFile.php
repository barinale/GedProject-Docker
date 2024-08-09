<?php foreach ($data as $dat=>$value): ?>
    
    <?php echo "<h1>".$dat."</h1>";?> 

        <?php if ($dat == 'email'): ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">File</th>
                    <th scope="col">email_description</th>
                    <th scope="col">email_sender</th>
                    <th scope="col">date_sent</th>
                </tr>
                </thead>
                <tbody>
            <?php foreach ($value as $row): ?>
                <tr>
                    <th scope="row"><?php echo $row['name'] ?></th>
                    <td><?php echo $row['path'] ?></td>
                    <td><?php echo $row['email_description'] ?></td>
                    <td><?php echo $row['email_sender'] ?></td>
                    <td><?php echo $row['date_sent'] ?></td>
                </tr>
            <?php endforeach; ?>
                    
                </tbody>
                </table>

        <?php elseif ($dat == 'factory'): ?>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">File</th>
                    <th scope="col">company</th>
                    <th scope="col">amount</th>
                </tr>
                </thead>
                <tbody>
            <?php foreach ($value as $row): ?>
                <tr>
                    <th scope="row"><?php echo $row['name'] ?></th>
                    <td><?php echo $row['path'] ?></td>
                    <td><?php echo $row['company'] ?></td>
                    <td><?php echo $row['amount'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>

        <?php elseif ($dat == 'estimate'): ?>

            
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">File</th>
                    <th scope="col">estimate_description</th>
                    <th scope="col">amount</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($value as $row): ?>
                <tr>
                    <th scope="row"><?php echo $row['name'] ?></th>
                    <td><?php echo $row['path'] ?></td>
                    <td><?php echo $row['estimate_description'] ?></td>
                    <td><?php echo $row['total_amount'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
            
        <?php elseif ($dat == 'command'): ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">name</th>
                    <th scope="col">File</th>
                    <th scope="col">command_description</th>
                    <th scope="col">amount</th>
                </tr>
                </thead>
                <tbody>
            <?php foreach ($value as $row): ?>

                <tr>
                    <th scope="row"><?php echo $row['name'] ?></th>
                    <td><?php echo $row['path'] ?></td>
                    <td><?php echo $row['command_description'] ?></td>
                    <td><?php echo $row['total_amount'] ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>
        <?php endif; ?>


  



    




<?php endforeach; ?>