<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<!DOCTYPE html>

<html>
<head>
    <title>module 022</title>
    <meta charset="UTF-8">
    
</head>

<body>   
    <div class="type-022">
    <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                              <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
                  </ul>
                  <br>
                  <br>
        <div class="tab-content">
          <div class="tab-pane active" id="tab-description" itemprop="description"><p>
    HTC Touch - in High Definition. Watch music videos and streaming content in awe-inspiring high definition clarity for a mobile experience you never thought possible. Seductively sleek, the HTC Touch HD provides the next generation of mobile functionality, all at a simple touch. Fully integrated with Windows Mobile Professional 6.1, ultrafast 3.5G, GPS, 5MP camera, plus lots more - all delivered on a breathtakingly crisp 3.8" WVGA touchscreen - you can take control of your mobile world with the HTC Touch HD.</p>
<p>
    <strong>Features</strong></p>
<ul>
    <li>
        Processor Qualcomm® MSM 7201A™ 528 MHz</li>
    <li>
        Windows Mobile® 6.1 Professional Operating System</li>
    <li>
        Memory: 512 MB ROM, 288 MB RAM</li>
    <li>
        Dimensions: 115 mm x 62.8 mm x 12 mm / 146.4 grams</li>
    <li>
        3.8-inch TFT-LCD flat touch-sensitive screen with 480 x 800 WVGA resolution</li>
    <li>
        HSDPA/WCDMA: Europe/Asia: 900/2100 MHz; Up to 2 Mbps up-link and 7.2 Mbps down-link speeds</li>
    <li>
        Quad-band GSM/GPRS/EDGE: Europe/Asia: 850/900/1800/1900 MHz (Band frequency, HSUPA availability, and data speed are operator dependent.)</li>
    <li>
        Device Control via HTC TouchFLO™ 3D &amp; Touch-sensitive front panel buttons</li>
    <li>
        GPS and A-GPS ready</li>
    <li>
        Bluetooth® 2.0 with Enhanced Data Rate and A2DP for wireless stereo headsets</li>
    <li>
        Wi-Fi®: IEEE 802.11 b/g</li>
    <li>
        HTC ExtUSB™ (11-pin mini-USB 2.0)</li>
    <li>
        5 megapixel color camera with auto focus</li>
    <li>
        VGA CMOS color camera</li>
    <li>
        Built-in 3.5 mm audio jack, microphone, speaker, and FM radio</li>
    <li>
        Ring tone formats: AAC, AAC+, eAAC+, AMR-NB, AMR-WB, QCP, MP3, WMA, WAV</li>
    <li>
        40 polyphonic and standard MIDI format 0 and 1 (SMF)/SP MIDI</li>
    <li>
        Rechargeable Lithium-ion or Lithium-ion polymer 1350 mAh battery</li>
    <li>
        Expansion Slot: microSD™ memory card (SD 2.0 compatible)</li>
    <li>
        AC Adapter Voltage range/frequency: 100 ~ 240V AC, 50/60 Hz DC output: 5V and 1A</li>
    <li>
        Special Features: FM Radio, G-Sensor</li>
</ul>
    </div> 

</body>
</html>                                    
