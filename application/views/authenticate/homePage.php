<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="container">
    <h1>Day 4 Solution</h1>

    <div id="body">

        <div class="row">
            <div class="col-sm-6">
                <h2>--- Day 4: High-Entropy Passphrases ---</h2>
                <p>
                    A new system policy has been put in place that requires all accounts to use a passphrase instead of
                    simply a password. </p>
                <p>A passphrase consists of a series of words (lowercase letters) separated by spaces.</p>
                <p>
                    To ensure security, a valid passphrase must contain no duplicate words.
                </p>
                <p>
                    For example:
                </p>
                <ul>
                    <li>aa bb cc dd ee is valid.</li>
                    <li>aa bb cc dd aa is not valid - the word aa appears more than once.</li>
                    <li>aa bb cc dd aaa is valid - aa and aaa count as different words.</li>
                </ul>
                <p>
                    The system's full passphrase list is available as your puzzle input. How many passphrases are valid?
                </p>

                <p>My solution is written using:</p>
                <code>CodeIgniter php framework</code>
                <code>Twitter Bootstrap</code>
                <code>JavaScript</code>
            </div>

            <div class="col-sm-6">

                <a class="button btn btn-lg btn-primary btn-block"
                   href="<?php echo base_url('index.php/authenticate/changepw'); ?>">
                    Submit my new Password
                </a>

                <?php
                if (ENVIRONMENT === 'development') {
                    ?>
                    <a class="button btn btn-lg btn-primary btn-block"
                       href="<?php echo base_url('index.php/testunit'); ?>">
                        Run a unit test (for developing)
                    </a>
                    <?php
                }
                ?>

            </div>
        </div>

        <p class="footer">Page rendered in <strong>{elapsed_time}</strong>
            seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
        </p>
    </div>


