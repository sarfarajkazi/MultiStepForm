<div class="bootstrap">
    <div class="row">
        <?php
        if (isset($_REQUEST['msg']) && $_REQUEST['msg'] == 'success') {
            ?>
            <div class="alert alert-success text-center" role="alert">
                <label>Vielen Dank für Ihre Kostenüberprüfung! Sie erhalten von uns innerhalb eines Arbeitstages eine
                    Antwort.</label>
            </div>
            <?php
        }
        ?>
        <form method="post" id="submission_form">
            <h5>Step 1</h5>
            <section class="step well">
                <div class="middle">
                    <h4>
                        <?php _e("Was ausgeräumt werden sollte?", MSF_TEXTDOMAIN) ?>
                    </h4>
                    <label>
                        <input type="radio" value="Wohnung" name="cleared-out" checked/>
                        <div class="Wohnung box">
                            <span>Wohnung</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" value="Haus" name="cleared-out"/>
                        <div class="Haus box">
                            <span>Haus</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" value="Firma" name="cleared-out"/>
                        <div class="Firma box">
                            <span>Firma</span>
                        </div>
                    </label>
                    <label>
                        <input type="radio" value="Sonstige" name="cleared-out"/>
                        <div class="andere box">
                            <span>Sonstige</span>
                        </div>
                    </label>
                </div>
            </section>
            <h5>Step 2</h5>
            <section class="step well">
                <div class="middle">
                    <h4>
                        <?php _e("Wie viele Quadratmeter beträgt die Fläche?", MSF_TEXTDOMAIN) ?>
                    </h4>
                    <input type="text" class="js-range-slider" name="" value=""/>
                    <input type="hidden" class="square-meters" name="square-meters"/>
                </div>
            </section>
            <h5>Step 3</h5>
            <section class="step well">
                <div class="middle">
                    <h4>
                        <?php _e("Von welchem Stockwerk soll der Hausrat abgeholt werden?", MSF_TEXTDOMAIN) ?>
                    </h4>
                    <ul class="household-wrap">
                        <li>
                            <label><input type="checkbox" name="household[]" value="Untergeschoss" class="required">
                                <?php _e("Untergeschoss", MSF_TEXTDOMAIN) ?>
                            </label>
                        </li>
                        <li>
                            <label><input type="checkbox" name="household[]" value="Erdgeschoss">
                                <?php _e("Erdgeschoss", MSF_TEXTDOMAIN) ?>
                            </label>
                        </li>
                        <li>
                            <label><input type="checkbox" name="household[]" value="1. Stockwerk">
                                <?php _e("1. Stockwerk", MSF_TEXTDOMAIN) ?>
                            </label>
                        </li>
                        <li>
                            <label><input type="checkbox" name="household[]" value="2. Stockwerk oder höher">
                                <?php _e("2. Stockwerk oder höher", MSF_TEXTDOMAIN) ?>
                            </label>
                        </li>
                    </ul>
                    <label class="household-lift-wrap"><input type="checkbox" name="household-lift" value="Yes">
                        <?php _e("Aufzug zum Ausräumen vorhanden", MSF_TEXTDOMAIN) ?>
                    </label>
                </div>
            </section>
            <h5>Step 4</h5>
            <section class="step well">
                <div class="middle">
                    <h4>
                        <?php _e("Welche Gegenstände sollten entsorgt werden?", MSF_TEXTDOMAIN) ?>
                    </h4>
                    <ul class="disposed-wrap">
                        <li>
                            <label><input type="checkbox" name="disposed[]" value="Möbel" class="required">
                                <?php _e("Möbel", MSF_TEXTDOMAIN) ?>
                            </label>
                        </li>
                        <li>
                            <label><input type="checkbox" name="disposed[]" value="Elektrogeräte">
                                <?php _e("Elektrogeräte", MSF_TEXTDOMAIN) ?></label>
                        </li>
                        <li>
                            <label><input type="checkbox" name="disposed[]" value="Gartenabfälle">
                                <?php _e("Gartenabfälle", MSF_TEXTDOMAIN) ?>
                            </label>
                        </li>
                        <li>
                            <label><input type="checkbox" name="disposed[]" value="Andere">
                                <?php _e("Andere", MSF_TEXTDOMAIN) ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </section>
            <h5>Step 5</h5>
            <section class="step well">
                <div class="middle">
                    <h4>
                        <?php _e("Beschreiben Sie Ihren Auftrag (fakultativ) an den Rümpelkönig (Firmenname)", MSF_TEXTDOMAIN) ?>
                    </h4>
                    <textarea class="required" rows="6" name="describe-mission"
                              placeholder="<?php _e("Nachrichtenfeld", MSF_TEXTDOMAIN) ?>"></textarea>
                </div>
            </section>
            <h5>Step 6</h5>
            <section class="step well">
                <div class="row">
                    <h4 class="text-center">
                        <?php _e("Erhalten Sie Ihr Angebot innerhalb eines Arbeitstages", MSF_TEXTDOMAIN) ?>
                    </h4>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Vorname"
                                       placeholder="<?php _e("Vorname", MSF_TEXTDOMAIN) ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="Nachname"
                                       placeholder="<?php _e("Vorname", MSF_TEXTDOMAIN) ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="tel" class="form-control" name="Telefon"
                                       placeholder="<?php _e("Telefon", MSF_TEXTDOMAIN) ?>">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="tel" class="form-control" name="Email"
                                       placeholder="<?php _e("E-mail", MSF_TEXTDOMAIN) ?>">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="tel" class="form-control" name="PLZ"
                                       placeholder="<?php _e("PLZ", MSF_TEXTDOMAIN) ?>">
                            </div>


                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label class="privacy-lbl">
                                    <input type="checkbox" name="privacy-val">
                                    <a href="">Datenschutzerklärung</a></label>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive" src="<?php echo MSF_IMAGES . 'user.png' ?>">
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <?php
            wp_nonce_field('submit-form', 'form-nonce');
            ?>
        </form>
    </div>


    <div class="row final-step-wrapper" style="display: none" >
        <section class="well text-center">
            <div class="row">
                <div class="col-md-8">
                    <h4>
                        Vielen Dank für Ihre Kostenüberprüfung!
                    </h4>
                    <div class="image-wrapper" >
                        <img class="img-responsive" style="width: 180px;margin: auto;margin-bottom: 25px;" src="<?php echo MSF_IMAGES . 'done.png' ?>">
                    </div>
                    <p style="color: #000">
                        Sie erhalten von uns innerhalb eines Arbeitstages eine Antwort.
                    </p>
                    <p style="color: #000">
                        Um das Verfahren zu beschleunigen, können Sie mich direkt kontaktieren 01234567
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="image-wrapper-right">
                        <img class="img-responsive" style="width: 180px;margin: auto" src="<?php echo MSF_IMAGES . 'user-2.png' ?>">
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </section>
    </div>

    <div class="row">
        <div class="progress center-block">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0"
                 aria-valuemax="100"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Google Analytics -->
<script>

</script>
<!-- End Google Analytics -->