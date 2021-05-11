<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                "name"=>"Samsung 40 inch Full HD Smart TV with Built-in Receiver - UA40T5300AUXEG",
                "description"=>"Description:
Watch, Play, Connect
Lifelike color that brings you closer
PurColor
PurColor makes watching videos feel almost like you're there. It enables the TV to express a huge range of colors for optimal picture performance, and an immersive viewing ...",
                "price"=>"5299.0",
                "image"=>"https://cf2.s3.souqcdn.com/item/2020/05/17/12/52/08/14/5/item_XL_125208145_d831ad560c685.jpg"
            ], [
                "name"=>"ATA 43 Inch Full HD LED Smart TV Black - 43S1",
                "description"=>"Description:
Brand : ATA
Model Number : 43S1
Size: 43 Inch
Color : Black
Android : 4.4.2
Resolution: 1920 x 1080 (Full HD)
USB : 2
HDMI : 2
VGA : 1
Wi Fi : Yes
Lan : Yes
AV In Put  : 1
AV Out Put : 1
Media Support All Extension
RF -N/A",
                "price"=>"4299.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2017/10/23/26/12/10/40/item_XL_26121040_54879156.jpg"
            ], [
                "name"=>"Samsung 50 Inch 4K Ultra HD Smart LED TV with Built-in Receiver, Titan Grey - UA50TU7000UXEG",
                "description"=>"Description:
Color and detail designed for you
Crisp and vivid color expression
Crystal Display
Immerse yourself in the picture with a wider range of color. Crystal Display ensures optimized color expression so you can see every subtle detail.
...",
                "price"=>"7499.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2020/04/21/12/29/07/85/4/item_XL_122907854_daa53fe927e67.jpg"
            ], [
                "name"=>"Contex 55 inch 4K Ultra HD LED Smart Android TV with Remote Control - CON55F30SUTSA",
                "description"=>"Description:
Brand: Contex
Model number: CON55F30SUTSA
Color: Black
Dimensions: 1234.6 x 715.9 x 74.8 mm
Weight: 11.5 kg
Operating system: Android 9.0
Wi-Fi: Wi-Fi 802.11 a/b/g/n/a
Bluetooth: Yes
It supports google browser
Display
Display type: DLED 4K UHD
Aspect ratio: 16:9
Resolution: 3840 x 2160 Pixels
Brightness: 250 cd/m2
Contrast: 5000:1
Viewing angle: 178° x 178°
Response time: 6.5 ...",
                "price"=>"5799.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2021/02/18/13/23/97/27/7/item_XL_132397277_161b099504ddd.jpg"
            ], [
                "name"=>"Samsung 32 Inch HD Smart LED TV with Built-in Receiver, Black - UA32T5300AUXEG",
                "description"=>"Description:
Watch, Play, Connect
Lifelike color that brings you closer
PurColor
PurColor makes watching videos feel almost like you're there. It enables the TV to express a huge range of colors for optimal picture performance, and an immersive viewing ...",
                "price"=>"3880.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2020/04/21/12/29/07/82/8/item_XL_122907828_97c8485e835d9.jpg"
            ], [
                "name"=>"Contex 40 inches Full HD Standard TV, Black - CON40N30NFA1A",
                "description"=>"Description:
Specifications:
Brand: Contex
Model: CON40N30NFA1A
Display type: DLED
Aspect ratio: 16:9
Brightness: 230 CD/m2
Contrast: 3000:1
Viewing angle: 178 degrees horizontally and vertically
Display colors: 16.7 m
Response time: 8.5 ms
Audio:
ATV: B/G/D/K/I
Stereo Sound: NICAM
Maximum audio output: 2x8W
Equalizers: Yes
Effects: Yes
Video:
ATV: PAL SECAM
Inputs:
AV IN: 1
YPBPR: 1
...",
                "price"=>"3199.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2021/03/28/13/25/52/05/5/item_XL_132552055_eecb00838d303.jpg"
            ], [
                "name"=>"LG 43 Inch FHD LED TV With Built In HD Receiver - 43Lm5500",
                "description"=>"Description:
Screen:
Type: LED TVs
Diagonal: 43 (108 cm) Dimensions: 63 height 98 width
Resolution: 1920x1080
HD format: FULL HD
Screen format: 16: 9
Curved screen: no
LED backlight type: DIRECT LED
Image:
Active HDR
Update frequency: 50 Hz
Color Enhancement Technology: Dynamic Color
Clarity Improvement Technology: True Motion
Noise Reduction System: Yes
IPS Display
Sound:
Total ...",
                "price"=>"5777.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2019/07/08/54/94/05/00/item_XL_54940500_bc87035789dba.jpg"
            ], [
                "name"=>"Mega ME65S4K 65 Inch LED 4K UHD Smart Android TV with Remote Control - Black",
                "description"=>"Description:
Brand: Mega
Model number: ME65S4K
TV Type: Smart Android TV
Power source: 100-240V
Hard disk capacity: 1-8GB
Display
Display type: LED 4K UHD
Screen size: 65 inches
Resolution: 3840 x 2160 Pixels
Brightness: 230 cd/m2
Response time: 8 ms
Viewing angle: 178 x 178
Aspect ratio: 16: 59
Connectivity
2 HDMI ports
2 USB ports
AV input
PC input
RF input
Wi-Fi
Accessories
Remote ...",
                "price"=>"8499.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2021/02/28/13/24/34/72/7/item_XL_132434727_e01129375331c.jpg"
            ], [
                "name"=>"ATA 58 Inch 4K Ultra HD Smart TV, Android, Black - A124",
                "description"=>"Description:
Specifications:
Brand: ATA
Color: Black
Screen Size: 58 Inch
Panel Backlight: LED
Resolution: 3840 x 2160
Aspect Ratio: 16:09
Operating System: Android 9 Pie
Connectivity:
2 x HDMI
2 x USB 2.0
VGA Video In
Video Input
RJ45 (LAN)",
                "price"=>"6099.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2020/05/11/12/35/25/53/1/item_XL_123525531_88a16b8a51a79.jpg"
            ], [
                "name"=>"Contex 40 inches Full HD Smart Android TV, Black - CON40Z10SFA1B",
                "description"=>"Description:
Specifications:
Brand: Contex
Model: CON40Z10SFA1B
Display type: DLED
Aspect ratio: 16:9
Operating system: Android 8.0
Brightness: 250 CD/m2
Contrast: 5000:1
Viewing angle: 178 degrees horizontally and vertically
Display colors: 16.7 m
Response time: 8.5 ms
Audio:
ATV: B/G/D/K/I
Stereo Sound: NICAM
Maximum audio output: 2x8W
Equalizers: Yes
Effects: Yes
Video:
ATV: PAL ...",
                "price"=>"3399.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2021/03/28/13/25/52/06/1/item_XL_132552061_af1bbcc500aef.jpg"
            ], [
                "name"=>"Contex 43 inches Full HD Standard TV, Black - CON43N30NFA1A",
                "description"=>"Description:
Specifications:
Brand: Contex
Model: CON43N30NFA1A
Display type: DLED
Aspect ratio: 16:9
Brightness: 230 CD/m2
Contrast: 5000:1
Viewing angle: 178 degrees horizontally and vertically
Display colors: 16.7 m
Response time: 8.5 ms
Audio:
ATV: B/G/D/K/I
Stereo Sound: NICAM
Maximum audio output: 2x8W
Equalizers: Yes
Effects: Yes
Video:
ATV: PAL SECAM
Inputs:
AV IN: 1
YPBPR: 1
...",
                "price"=>"3799.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2021/03/28/13/25/52/05/7/item_XL_132552057_fafaeb7dbf893.jpg"
            ], [
                "name"=>"LG 43 inches UHD 4K Smart TV, Active HDR, WebOS Operating System, ThinQ AI - 43UP7550PVG",
                "description"=>"Description:
Features:
Brand: LG
Model: 43UP7550PVG
Type of processor: A5 AI Processor 4K
Number of sound channels: 2
Design: Cinema screen
Display:
Nano color: Yes
Nano accuracy: Yes
Platform:
Operating system: webOS Smart TV
Number of CPUs: Quad
Video and picture quality:
AI upscaling: 4K Upscaling
Image enhancing: Yes
AI brightness control: Yes
Filmmaker mode: Yes
Dynamic tone mapping: ...",
                "price"=>"7649.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2021/03/25/13/25/44/42/4/item_XL_132544424_5d0b60a625687.jpg"
            ], [
                "name"=>"Jac 32N 32 Inch HD LED TV, IPS Panel - Black",
                "description"=>"Description:
Display operating information in more than one languageIPS panelViewing angle: 178*178Resolution: 1366*768Height: Width: 16:09Dimensions without a holder: 84X43X73Contrast: 1200：1Brightness ( * ) 200°Speed of response 8m/sStorage space: NoPORTS:2 HDMI2 USB1 VGA1 AV IN1 Component INTV Tuner: ( RF )1 speaker port",
                "price"=>"2799.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2019/01/02/42/91/05/72/item_XL_42910572_122f8031b3fb0.jpg"
            ], [
                "name"=>"Sony 55 inch 4K LED Smart Android TV with Remote Control - KD-55X7500H",
                "description"=>"Description:
Brand: Sony
Model number: KD-55X7500H
Color: Black
TV type: Smart TV
Weight: 15.9 Kg
Dimensions of TV with stand: 1241 x 781 x 340 mm
Dimensions of TV without stand: 1241 x 721 x 79 mm
Display
Screen size: 55 inches
Resolution: 3840 x 2160 pixels
Contrast ratio: Triluminos display
Viewing angle: 178
Aspect ratio: 16:09
Total internal memory: 16 GB
Broadcasting type: Digital ( ...",
                "price"=>"10699.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2020/12/20/13/21/94/23/5/item_XL_132194235_db480f9e935ee.jpg"
            ], [
                "name"=>"Grouhy 43 Inch Full HD LED Smart TV- GLD43SA",
                "description"=>"Description:
HDTV : nullBrand : nullTV Type : Smart TVColor : BlackRemote Control : YesScreen Size (Inch) : 43 InchHD Type : Full HDDisplay Resolution : 1920x1080Display Type : LEDModel Number : GLD43SAPortable : 1Are batteries needed to power the product or is this product a battery : 0Is this a Dangerous Good or a Hazardous Material, Substance or Waste that is regulated for transportation, storage, ...",
                "price"=>"4599.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2019/10/06/72/61/64/75/item_XL_72616475_20942f6fdb076.jpg"
            ], [
                "name"=>"Samsung 65 Inch 4K Ultra HD Smart LED TV with Built-in Receiver, Black - UA65TU7000UXEG",
                "description"=>"Description:
Brand: Samsung
Model: UA65TU7000UXEG
Series: 7
Display:
Screen size: 65 Inches
Resolution: 3840 x 2160 4K ULTRA HD
Video:
Picture engine: Crystal Processor 4K
Motion rate: MR100
PQI (Picture Quality Index): 2000
HDR (High Dynamic Range): HDR
Auto motion plus: Yes
Contrast enhancer: Yes
Film mode: Yes
Natural mode support: Yes
HDR 10+: Yes
HLG (Hybrid Log Gamma): ...",
                "price"=>"10999.0",
                "image"=>"https://cf2.s3.souqcdn.com/item/2020/09/03/13/17/55/15/7/item_XL_131755157_775cd567a9a6f.jpg"
            ], [
                "name"=>"Samsung 55 Inch 4K Ultra HD Smart Curved LED TV with Built-in Receiver, Black - UA55TU8300UXEG",
                "description"=>"Description:
Specifications:
Brand: Samsung
Model: UA55TU8300UXEG
Size: 124 x 79 x 26 cm
It features processor transforms images into 4K
You can watch TV from any angle in the room thanks to curve design
Crystal clear colors to deliver vivid pictures
It features Ambient mode that enables your TV to mimic wall behind it
You can access your files and documents using Microsoft office 365
High ...",
                "price"=>"9599.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2020/09/06/13/17/61/30/7/item_XL_131761307_216eb877933d6.jpg"
            ], [
                "name"=>"LG UHD 4K TV 49 Inch UN73 Series, 4K Active HDR WebOS Smart AI ThinQ - 49UN7340PVC",
                "description"=>"Description:
Stay hooked in hours of fun entertainment with the LG LED AI ThinQ 4K 49inch Smart TV. It lets you watch your favorite shows and movies in superior quality. You can access the Apple TV app and Netflix that have an array of content, allowing you to choose whatever you want to watch all day long. The 49inch screen ensures a heightened movie-watching experience. Thanks to the ...",
                "price"=>"7999.0",
                "image"=>"https://cf2.s3.souqcdn.com/item/2020/04/26/12/29/36/20/4/item_XL_122936204_83f664225efa7.jpg"
            ], [
                "name"=>"Samsung 58 Inch 4K Ultra HD Smart LED TV with Built-in Receiver, Black - UA58TU7000UXEG",
                "description"=>"Description:
Brand: Samsung
Model: UA58TU7000UXEG
Series: 7
Display:
Screen size: 58 Inches
Resolution: 3840 x 2160 4K ULTRA HD
Video:
Picture engine: Crystal 4K
Motion rate: 100
PQI (Picture Quality Index): 2900
HDR (High Dynamic Range): HDR
Contrast: Mega contrast
Auto motion plus: Yes
Contrast enhancer: Yes
Film mode: Yes
Natural mode support: Yes
HDR 10+: Yes
HLG (Hybrid Log Gamma): ...",
                "price"=>"8799.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2020/09/03/13/17/55/15/5/item_XL_131755155_6c140793331eb.jpg"
            ], [
                "name"=>"Sharp 55 inch 4K Ultra HD LED Smart Android TV with Remote Control and Built-in Receiver - 4T-C55DL6EX",
                "description"=>"Description:
Brand: Sharp
Model number: 4T-C55DL6EX
Color: Black
TV type: Smart TV
Weight: 10.62 Kg
Dimensions with stand: 1227 x 770 x 280 mm
Dimensions without stand: 1227 x 714 x 75 mm
Total internal memory : 32 GB
Display
Screen size: 55 inches
Resolution: 3840 x 2160 pixels
Viewing angle: 178 °
Aspect ratio: 16:09
Broadcasting type: Digital (DVB-T/T2/S/S2)
Sound
Audio power output: 10 ...",
                "price"=>"8990.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2021/03/25/13/25/46/09/7/item_XL_132546097_6f651ed2473c7.jpg"
            ], [
                "name"=>"Toshiba 32 Inch HD LED Standard TV, Black - 32L3965EA",
                "description"=>"Description:
Brand: ToshibaTV type: standard TVResolution: 1366 x 768Aspect ratio: 16:09Viewing angle: 178 degreeFilter type: comb filterAudio system: Dolby plus technologySpeaker output: 8 watt x 2Color: blackRemote control: yesScreen size: 32 inchDisplay type: LEDOther features:Time shiftingPVREGPPlayback format: video - music - photoSleep timer functionPower consumption: 50 wattStandby: 0.5 ...",
                "price"=>"3299.0",
                "image"=>"https://cf2.s3.souqcdn.com/item/2020/01/05/10/29/37/34/8/item_XL_102937348_8c8c2d5207604.jpg"
            ], [
                "name"=>"Samsung 43 Inch Full HD Smart LED TV with Built-in Receiver, Black - UA43T5300AUXEG",
                "description"=>"Description:
Watch, Play, Connect
Lifelike color that brings you closer
PurColor
PurColor makes watching videos feel almost like you're there. It enables the TV to express a huge range of colors for optimal picture performance, and an immersive viewing ...",
                "price"=>"6699.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2020/04/21/12/29/07/84/4/item_XL_122907844_bc095a9951359.jpg"
            ], [
                "name"=>"Samsung 55 Inch 4K Ultra HD Smart LED TV with Built-in Receiver, Titan Grey - UA55TU7000UXEG",
                "description"=>"Description:

Brand: Samsung
Model: UA55TU7000UXEG
Series 7
Display:
Screen Size: 55 Inches
Resolution:3840 x 2160 4K Ultra HD
Video Picture Engine: Crystal Processor 4K
Motion Rate: MR100
PQI (Picture Quality Index): 2000
HDR (High Dynamic Range): HDR
HDR 10+: Yes
Contrast: Mega
HLG (Hybrid Log Gamma): Yes
Color Volume: 100% with Quantum Dot
Viewing Angle: Ultra Viewing Angle
Micro ...",
                "price"=>"9000.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2020/04/21/12/29/07/89/9/item_XL_122907899_008a4df10bc0f.jpg"
            ], [
                "name"=>"LG UHD 4K TV 49 Inch UN72 Series, 4K Active HDR WebOS Smart AI ThinQ - 49UN7240PVG",
                "description"=>"Description:
Experience breathtaking picture quality coming to life with the LG LED 49UN7240PVG AI ThinQ UHD Smart TV. It features a 49inch screen that renders bright and clear visuals at an incredible resolution of 3840 X 2160 pixels. The LG LED 4K UHD TV packs in state-of-the-art technologies to ensure you of a remarkable viewing experience. The LG AI ThinQ's natural voice recognition lets ...",
                "price"=>"7699.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2020/04/26/12/29/36/19/7/item_XL_122936197_ce67b7bab1dc5.jpg"
            ], [
                "name"=>"LG 65 inches UHD 4K Smart TV, Active HDR, WebOS Operating System, ThinQ AI - 65UP8150PVB",
                "description"=>"Description:
Features:
Brand: LG
Model: 65UP8150PVB
Type of processor: A5 AI Processor 4K
Number of sound channels: 2
Design: Cinema screen
Display:
Nano color: Yes
Nano accuracy: Yes
Platform:
Operating system: webOS Smart TV
Number of CPUs: Quad
Video and picture quality:
AI upscaling: 4K Upscaling
Image enhancing: Yes
AI brightness control: Yes
Filmmaker mode: Yes
Dynamic tone mapping: ...",
                "price"=>"14499.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2021/03/25/13/25/44/45/2/item_XL_132544452_cf5612d0bd7ef.jpg"
            ], [
                "name"=>"Fresh 43LF621 43 Inch Full HD LED TV with Remote Control - Black",
                "description"=>"Description:
Display
Resolution: 1920×1080
Contrast: 1:200
Brightness: 250 cd/m2
Refresh Rate: 60 Hz
Response Time: 8 ms
IPS
Audio
10 Watts (5×5 Watt)
Stereo Sound: NICAM
Equalizer
Connection
2 HDMI ports
2 USB ports (type 2)
1 Component In
1 Composite In
1 RF port
Remote Control
1 Standard remote control
Any risks associated with the product use: NO",
                "price"=>"4290.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2020/02/05/11/39/77/34/7/item_XL_113977347_ca89c3d9a807a.jpg"
            ], [
                "name"=>"Samsung 65 Inch 4K Ultra HD Smart LED TV with Built-in Receiver, Black - UA65TU8000UXEG",
                "description"=>"Description:
Brand: Samsung
Model: UA65TU8000UXEG
Display:
Screen size: 65 Inches
Resolution: 3840 x 2160 pixel
Video:
Picture Engine: Crystal processor 4K
Motion Rate: 120+
PQI (Picture Quality Index): 2100
HDR (High Dynamic Range): HDR
Auto Motion Plus: Yes
Contrast Enhancer: Yes
Film Mode: Yes
Natural Mode Support: Yes
HDR 10+: Yes
HLG (Hybrid Log Gamma): Yes
Audio:
Sound Output: 20 ...",
                "price"=>"12824.0",
                "image"=>"https://cf2.s3.souqcdn.com/item/2020/09/07/13/17/67/95/9/item_XL_131767959_992b697a7724e.jpg"
            ], [
                "name"=>"Skyline 32 Inch HD LED TV-3228a",
                "description"=>"Description:
Model: 3228a
Panel Specifications
Size: 32 inch
Resolution: 1366 x 768
Brightness (cd/m2): 240
Viewing Angle: 178/178
Video
Comb Filter: 3D
De-interlace: 3D
Noise Reduction: yes
Picture Modes: 4 modes
Audio
Audio Output: 8Wx2
Sound Modes: 5 modes
I/O Terminals
RF Input: yes
AV Input: x1
HDMI Input: x2
VGA Input: x1
YPbPr Input: x1
USB: x2
PC Audio In: yes
Earphone Out: yes
Output: AV out ...",
                "price"=>"2599.0",
                "image"=>"https://cf2.s3.souqcdn.com/item/2019/02/06/44/70/34/07/item_XL_44703407_08bbe78fdc977.jpg"
            ], [
                "name"=>"LG 65 Inch 4K Ultra HD Smart LED TV with Built-in Receiver, Black - 65UN7240PVG",
                "description"=>"Description:
Brand: LG
Model number: 65UN7240PVG
Display
Display type: 4K UHD
Screen size: 65 inches
Resolution: 3840 x 2160
Video (Picture quality)
Processor: Quad core processor 4K
Image enhancing: Yes
HDR: Active HDR
Film maker mode: Yes
Audio
AI Sound: Yes
AI Acoustic tuning: Yes
Surround mode: Ultra Surround
Clear voice: Yes
Bluetooth surround ready: Yes (Required Bluetooth)
AI ...",
                "price"=>"11599.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2020/10/29/13/19/81/97/3/item_XL_131981973_336d99f5e9b6b.jpg"
            ], [
                "name"=>"Contex 40Z10SFA1A Full HD DLED Smart Android TV, 40 Inches - Black",
                "description"=>"Description:
Specifications:
Brand: Contex
Model: 40Z10SFA1A
Display type: DLED
Aspect ratio: 16:9
Resolution: 1920 x 1080
Brightness: 250 CD/m2
Contrast: 5000:1
Viewing angle: 178 degrees horizontally and vertically
Display colors: 16.7 m
Response time: 8.5 ms
Audio:
ATV: B/G/D/K/I
Stereo Sound: NICAM
Maximum audio output: 2x8W
Equalizers: 4 Modes
Effects: Yes
Video:
ATV: PAL ...",
                "price"=>"3581.5",
                "image"=>"https://cf1.s3.souqcdn.com/item/2020/07/12/13/15/25/68/8/item_XL_131525688_560e5a830a1a3.jpg"
            ],

            [
                "name"=>"Dell G5 15-5500 Gaming laptop - 10th Generation Intel Core i7-10750H, 16GB, 1TB HDD and 256GB SSD PCIe NVMe, Nvidia Geforce GTX 1650 Ti 4GB GDDR6 Graphics, 15.6 inch FHD ( 1980x1080) IPS 120Hz, Backlit Keyboard,  Windows 10 - Black",
                "description"=>"Description:
Computer CPU Manufacturer : IntelExternal Product ID : 5397184407288Processor Speed (GHz) : 2.6 GHzModel Number : G5 15-5500Hard Disk Interface : PCIe & Serial ATAProcessor Type : Core i7 (10th Generation)Hardware Platform : windowsUSB : USB 2.0 & 3.2Brand : DellLaptop Family : LaptopVideo Controller Manufacturer : NVIDIAGraphics Card Capacity : 4 GBMemory Card Reader : YesKeyboard ...",
                "price"=>"17888.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2021/03/10/13/24/86/02/5/item_XL_132486025_46307252e6cae.jpg"
            ], [
                "name"=>"Dell G3 15-3500 Gaming laptop - Intel 10th Gen Core i7-10750H, 16GB, 512GB SSD, Nvidia Geforce GTX 1660 TI 6GB GDDR6 Graphics, 15.6 inch FHD IPS 144 Hz, Backlit Keyboard,  Windows 10 - White",
                "description"=>"Description:
Brand : DellHardware Platform : windowsColor : WhiteOperating System Type : Windows 10Hard Disk Capacity : 512 GBScreen Size Range : 15 - 15.9 inchesProcessor Type : Core i7 (10th Generation)USB : USB 3.1Hard Disk Interface : PCIeDisplay Size (Inch) : 15.6 inchesMemory Card Reader : NoRAM Size : 16 GBProcessor Family : Intel Core i7Number of Processor Core : Hexa CoreVideo Controller ...",
                "price"=>"19999.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2020/10/05/13/18/74/44/6/item_XL_131874446_a14c0eee8035b.jpg"
            ], [
                "name"=>"Dell Inspiron G3 3500 Gaming Laptop, Intel 10th Gen Core i7, 16 GB RAM, 1 TB, Nvidia Ge Force GTX 1650 4GB GDDR6, 15.6 inches, Ubuntu - Black",
                "description"=>"Description:
Specifications:
Brand: Dell
Model: Inspiron G3 3500
Type: Laptop
Software:
Operating system: Ubuntu
Hard drive:
Hard Disk Capacity: 1 TB + 256 GB
Hard Disk Interface: PCIe
Memory (RAM):
16 GB DDR4_sdram
Processor:
Intel Core i7-10750H
Cache: 12 MB Intel Smart Cache
Number of Cores: 6
Max Turbo Frequency: 5 GHz
Screen:
Display: 15.6 inches
Touchscreen: No
Camera:
720 ...",
                "price"=>"16699.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2021/02/28/13/24/35/67/3/item_XL_132435673_9ec862830a0fa.jpg"
            ], [
                "name"=>"Dell G3 15-3500 Gaming laptop - Intel 10th Gen Core i7-10750H, 16GB, 1 TB HDD, 256GB SSD, Nvidia Geforce GTX 1650 4GB GDDR6 Graphics, 15.6-inch FHD IPS, Backlit Keyboard,  Windows 10 - Black",
                "description"=>"Description:
Brand : DellHardware Platform : windowsColor : BlackOperating System Type : Windows 10Hard Disk Capacity : 1.256 TBScreen Size Range : 15 - 15.9 inchesProcessor Type : Core i7 (10th Generation)USB : USB 2.0 & 3.1Hard Disk Interface : PCIeDisplay Size (Inch) : 15.6 inchesMemory Card Reader : NoRAM Size : 16 GBProcessor Family : Intel Core i7Number of Processor Core : Hexa CoreVideo ...",
                "price"=>"18999.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2020/09/30/13/18/58/09/1/item_XL_131858091_797b35c94f0f3.jpg"
            ], [
                "name"=>"Dell G5 15-5500 Gaming laptop - Intel 10th Gen Core i7-10750H, 16GB, 512GB SSD, Nvidia Geforce RTX 2060 6GB GDDR6 Graphics, 15.6 inch FHD IPS 144 Hz, Backlit Keyboard,  Windows 10 - Black",
                "description"=>"Description:
Brand : DellHardware Platform : windowsColor : BlackOperating System Type : Windows 10Hard Disk Capacity : 512 GBScreen Size Range : 15 - 15.9 inchesProcessor Type : Core i7 (10th Generation)USB : USB 2.0 & 3.1Hard Disk Interface : PCIeDisplay Size (Inch) : 15.6 inchesMemory Card Reader : NoRAM Size : 16 GBProcessor Family : Intel Core i7Number of Processor Core : Hexa CoreVideo Controller ...",
                "price"=>"21999.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2020/09/30/13/18/57/91/4/item_XL_131857914_35134f6acc892.jpg"
            ], [
                "name"=>"Dell G3 15-3500 Gaming laptop - Intel 10th Gen Core i7-10750H, 16GB, 1TB SSD, Nvidia Geforce RTX 2060 6GB GDDR6 Graphics, 15.6-inch FHD IPS 144 Hz, Backlit Keyboard,  Windows 10 - Black",
                "description"=>"Description:
Brand : DellHardware Platform : windowsColor : BlackOperating System Type : Windows 10Hard Disk Capacity : 1 TBScreen Size Range : 15 - 15.9 inchesProcessor Type : Core i7 (10th Generation)USB : USB 2.0 & 3.1Hard Disk Interface : PCIe & Serial ATADisplay Size (Inch) : 15.6 inchesMemory Card Reader : NoRAM Size : 16 GBProcessor Family : Intel Core i7Number of Processor Core : Hexa CoreVideo ...",
                "price"=>"22977.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2020/09/30/13/18/57/88/6/item_XL_131857886_52c5737bfc306.jpg"
            ], [
                "name"=>"Dell G5 15-5590 Gaming Laptop, intel core i7-9750H, 16GB RAM, 1TB HDD & 256 GB SSD, NVIDIA GTX1660Ti 6GB DDR5 Graphics, 15.6 inch FHD IPS, Backlit KB, Ubuntu, Black",
                "description"=>"Description:
Brand : DellHardware Platform : LinuxColor : BlackOperating System Type : UbuntuHard Disk Capacity : 1.256 TBScreen Size Range : 15 - 15.9 InchProcessor Type : intel 9th Gen core i7-9750HUSB : USB 3.1Hard Disk Interface : SSA & SSDDisplay Size (Inch) : 15.6 InchMemory Card Reader : NoRAM Size : 16 GBProcessor Family : Intel 9th Generation Core i7Number of Processor Core : Hexa CoreVideo ...",
                "price"=>"19499.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2019/11/17/90/20/64/18/item_XL_90206418_5cf81213d9915.jpg"
            ], [
                "name"=>"Lenovo 82EY00NMED ideapad 15ARH05 Gaming 3 Laptop, 15.6 Inch FHD, 1TB HDD and 256GB SSD, 16 GB RAM, AMD Ryzen 7 4800H, NVIDIA GeForce GTX 1650Ti 4GB Graphics, Windows - Chameleon Blue",
                "description"=>"Description:
Brand: Lenovo
Model number: 82EY00NMED
Color: Chameleon Blue
Dimensions: 359 x 249.6 x 24.9 mm
Weight: 2.2 kg
Performance:
Operating system: Windows 10 Home
Processor: AMD Ryzen 7
Processor details: AMD Ryzen 7 4800H (2.9 Gigahertz, up to 4.2 GHz, Octa Core)
Memory (RAM): 16 GB
RAM type: DDR4
Storage: 1TB HDD + 256 GB SSD
Graphics: NVIDIA GeForce GTX 1650Ti 4GB GDDR6
Camera: 720 ...",
                "price"=>"16888.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2021/02/04/13/23/45/15/4/item_XL_132345154_e7997ee3969c0.jpg"
            ], [
                "name"=>"Dell G5 15-5500 Gaming laptop - Intel 10th Gen Core i7-10750H, 16GB, 1TB PCIe NVMe M.2 SSD, Nvidia Geforce RTX 2060 6GB GDDR6 Graphics, 15.6 inch FHD IPS 240Hz , 4-Zone RGB Backlit Keyboard,  Windows 10 - Black",
                "description"=>"Description:
Brand : DellHardware Platform : windowsColor : BlackOperating System Type : Windows 10Hard Disk Capacity : 1 TBScreen Size Range : 15 - 15.9 inchesProcessor Type : Core i7 (10th Generation)USB : USB 3.2Hard Disk Interface : PCIe SSDDisplay Size (Inch) : 15.6 inchesMemory Card Reader : YesRAM Size : 16 GBProcessor Family : Intel Core i7Number of Processor Core : Hexa CoreVideo Controller ...",
                "price"=>"25599.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2020/12/29/13/22/20/72/4/item_XL_132220724_f4f351c24de3e.jpg"
            ], [
                "name"=>"Dell Inspiron G3 3500 Laptop - Intel Core i7-10750H, 512 GB SSD, 16 GB RAM, 15.6 Inch, NVIDIA GTX 1660 TI, Ubuntu - Black",
                "description"=>"Description:
Brand: Dell
Model name: Inspiron G3
Model number: 3500
Software
Operating system: Ubuntu
Hard drive
Hard Disk Capacity: 512 GB
Hard Disk Interface: SSD
Memory (RAM)
Memory capacity: 16GB
Type: DDR4
Processor
Intel Core i7-10750H Processor
Number of Cores: 6
CPU Frequency: 5GHz
Screen
Display: 15.6 inch
Refresh rate: 120 Hz
Reading Instruments
Card Reader: Yes
Graphics card
...",
                "price"=>"19499.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2021/02/07/13/23/06/02/5/item_XL_132306025_8c454ddc51ede.jpg"
            ], [
                "name"=>"Asus TUF Gaming A15 FX506LI-HN138T Gaming Laptop, 15.6 Inch FHD, Intel Core i7-10870H, 1.512 TB SSD, 16 GB RAM, 4GB NVIDIA GeForce GTX 1650Ti, Windows - Grey Metal",
                "description"=>"Description:
Brand: ASUS
Model number: FX506LI-HN138T
Model name: TUF Gaming A15
Color: Gray Metal
Dimensions: 359 × 256 × 24.9 mm
Weight: 2.3 kg
Performance
Operating system: Windows 10
Processor details: Intel Core i7-10870H (2.2 Gigahertz, Up to 5.0 Gigahertz, Quad Core)
Memory (RAM): 16 GB
RAM type: DDR4
Storage: 1.512 TB SSD
Graphics: 4GB NVIDIA GeForce GTX 1650Ti
Battery: Lithium ...",
                "price"=>"18999.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2021/02/08/13/23/60/70/3/item_XL_132360703_35fac3969906b.jpg"
            ], [
                "name"=>"Lenovo Legion 5-15ARH05H Gaming laptop, Ryzen 7 4800H 8-Cores, 16GB RAM, 1TB HDD + 512 GB SSD, NVIDIA GeForce GTX 1660 Ti 6GB GDDR6 Graphics, 15.6 Inch FHD (1920x1080) IPS 250nits 120Hz, Backlit Keyboard, Windows 10 - Phantom Black",
                "description"=>"Description:
Computer CPU Manufacturer : AMDExternal Product ID : 195235945667Processor Speed (GHz) : 2.9 GHzModel Number : Legion 5-15ARH05HHard Disk Interface : PCIe & Serial ATAProcessor Type : Ryzen 7 4800HHardware Platform : windowsUSB : 3x USB 3.2 Gen 1 1x USB 3.2 Gen 1 (Always On) 1x USB-C 3.2 Gen 1 1x HDMI 2.0 1x Ethernet (RJ-45)Brand : LenovoVideo Controller Manufacturer : NVIDIALaptop ...",
                "price"=>"20999.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2021/02/04/13/23/43/97/4/item_XL_132343974_1c3f8d662b897.jpg"
            ], [
                "name"=>"Dell Inspiron G5 5500 Gaming Laptop - Intel Core i7-10750H, 15.6 inches, 512 SSD, 16 GB RAM, NVIDIA GeForce GTX 1660 Ti 6GB - Black",
                "description"=>"Description:
Brand: Dell
Model name: Inspiron G5
Model number: 5500
Software
Operating system: Ubuntu
Hard drive
Hard Disk Capacity: 512 GB
Hard Disk Interface: SSD
Memory (RAM)
Memory capacity: 16GB
Type: DDR4
Processor
Intel Core i7-10750H Processor
Number of Cores: 6
CPU Frequency: 5GHz
Screen
Display: 15.6 inch FHD
Reading Instruments
Card Reader: Yes
Graphics card

NVIDIA Geforce ...",
                "price"=>"20599.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2021/01/24/13/23/06/03/2/item_XL_132306032_6355b6dc89d3e.jpg"
            ], [
                "name"=>"Dell G5 15-5500 Gaming laptop - Intel 10th Gen Core i7-10750H, 16GB, 512GB SSD, Nvidia Geforce GTX 1660 TI 6GB GDDR6 Graphics, 15.6-inch FHD IPS 144 Hz, Backlit Keyboard,  Windows 10 - Black",
                "description"=>"Description:
Brand : DellHardware Platform : windowsColor : BlackOperating System Type : Windows 10Hard Disk Capacity : 512 GBScreen Size Range : 15 - 15.9 inchesProcessor Type : Core i7 (10th Generation)USB : USB 2.0 & 3.1Hard Disk Interface : PCIe & Serial ATADisplay Size (Inch) : 15.6 inchesMemory Card Reader : NoRAM Size : 16 GBProcessor Family : Intel Core i7Number of Processor Core : Hexa ...",
                "price"=>"19777.0",
                "image"=>"https://cf2.s3.souqcdn.com/item/2020/09/30/13/18/58/13/4/item_XL_131858134_5015aa8ed02a7.jpg"
            ], [
                "name"=>"HP Pavilion 15-ec1011nia Gaming Laptop - Ryzen 7 4800H 8-Cores, 8 GB RAM , 1TB HDD and 256GB  SSD, NVIDIA GeForce GTX 1650 Ti 4 GB GDDR6 dedicated Graphics, 15.6 Inch FHD, Backlit Keyboard, Dos - Shadow black",
                "description"=>"Description:
Computer CPU Manufacturer : AMDExternal Product ID : 195697122057Hard Disk Interface : PCIe & Serial ATAProcessor Speed (GHz) : 2.9 GHzModel Number : 15-ec1011niaHardware Platform : dosProcessor Type : Ryzen 7 4800HUSB : 1 SuperSpeed USB Type-C, 1 SuperSpeed USB Type-A, 1 HDMI 2.0, 1 RJ-45Brand : HPLaptop Family : LaptopVideo Controller Manufacturer : NVIDIAGraphics Card Capacity : 4 ...",
                "price"=>"16499.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2021/03/23/13/25/37/13/0/item_XL_132537130_8080e00e65463.jpg"
            ], [
                "name"=>"Dell G5 15-5500 Gaming laptop - Intel 10th Gen Core i7-10750H, 16GB,  512GB SSD, Nvidia Geforce RTX 2070 8GB GDDR6 Graphics, 15.6-inch FHD IPS 144 Hz, Backlit Keyboard,  Windows 10 - Black",
                "description"=>"Description:
Brand : DellHardware Platform : windowsColor : BlackOperating System Type : Windows 10Hard Disk Capacity : 512 GBScreen Size Range : 15 - 15.9 inchesProcessor Type : Core i7 (10th Generation)USB : USB 2.0 & 3.1Hard Disk Interface : PCIeDisplay Size (Inch) : 15.6 inchesMemory Card Reader : NoRAM Size : 16 GBProcessor Family : Intel Core i7Number of Processor Core : Hexa CoreVideo Controller ...",
                "price"=>"25999.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2020/09/30/13/18/58/07/3/item_XL_131858073_af6a7556d1695.jpg"
            ], [
                "name"=>"HP Pavilion 15-ec1010nia Gaming Laptop - Ryzen 7 4800H 8-Cores, 16 GB RAM , 1TB HDD and 256GB SSD, NVIDIA GeForce GTX 1650 Ti  4 GB GDDR6 dedicated Graphics , 15.6 Inch FHD, Backlit Keyboard, Dos - Shadow black",
                "description"=>"Description:
Computer CPU Manufacturer : AMDProcessor Speed (GHz) : 2.9 GHzModel Number : 15-ec1010niaHard Disk Interface : PCIe & Serial ATAProcessor Type : Ryzen 7 4800HHardware Platform : dosUSB : 1 SuperSpeed USB Type-C, 1 SuperSpeed USB Type-A, 1 HDMI 2.0, 1 RJ-45Brand : HPLaptop Family : LaptopVideo Controller Manufacturer : NVIDIAGraphics Card Capacity : 4 GBMemory Card Reader : YesKeyboard ...",
                "price"=>"16999.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2021/03/23/13/25/37/15/2/item_XL_132537152_bf318fe068498.jpg"
            ], [
                "name"=>"Lenovo Legion 5-15IMH05 Gaming laptop , Intel 10th Gen Core i7-10750H, 8GB RAM, 512GB SSD, NVIDIA GeForce GTX 1650 Ti 4GB GDDR6 Graphics, 15.6 inch FHD (1920X1080) IPS 120Hz, Backlit Keyboard, Windows 10 - Phantom Black",
                "description"=>"Description:
Computer CPU Manufacturer : IntelModel Number : Legion 5-15IMH05External Product ID : 195235267721Hard Disk Interface : PCIeProcessor Speed (GHz) : 2.6 GHzHardware Platform : windowsProcessor Type : Core i7 (10th Generation)USB : Four USB 3.2 Gen 1 (one Always On), one USB 3.2 Type-C Gen 1 (with the function of DisplayPort 1.2), HDMI 2.0, Ethernet (RJ-45)Brand : LenovoLaptop Family : ...",
                "price"=>"16640.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2020/12/22/13/21/99/82/7/item_XL_132199827_f7b3386e219b0.jpg"
            ], [
                "name"=>"Dell Inspiron G5 5500 Gaming Laptop, Intel 10th Gen Core i7, 16 GB RAM, 512 GB, Nvidia Ge Force GTX 1650 4GB GDDR6, 15.6 inches, Ubuntu - Black",
                "description"=>"Description:
Specifications:
Brand: Dell
Model: Inspiron G5 5500
Type: Laptop
Software:
Operating system: Ubuntu
Hard drive:
Hard Disk Capacity: 512 GB
Hard Disk Interface: PCIe
Memory (RAM):
16 GB DDR4_sdram
Processor:
Intel Core i7-10750H
Cache: 12 MB Intel Smart Cache
Number of Cores: 6
Max Turbo Frequency: 5 GHz
Screen:
Display: 15.6 inches
Touchscreen: No
Camera:
720 ...",
                "price"=>"16666.0",
                "image"=>"https://cf2.s3.souqcdn.com/item/2021/02/28/13/24/35/67/7/item_XL_132435677_d8809b8e8c2ce.jpg"
            ], [
                "name"=>"لاب توب ديل انسبيرون G3 3500 للالعاب، معالج انتل كور i7 الجيل العاشر، رام 16 جيجابايت، هارد 1 تيرابايت+SSD256، معالج رسومات انفيديا جي فورس جي تي اكس 1650 4 جيجابايت GDDR6، شاشة 15.6 بوصة، دوس- اسود",
                "description"=>"Description:
Brand : DellLaptop Family : LaptopColor : BlackDisplay Size (Inch) : nullComputer CPU Manufacturer : IntelTouch screen : NoUsage : GamingScreen Size Range : 15 - 15.9 inchesExternal Product ID Type : EAN-13Number of Processor Core : Hexa CoreHardware Platform : dosGraphics Card Capacity : 4 GBModel Number : G3-15-3500Keyboard Languages : English & ArabicProcessor Type : Core i7 (10th ...",
                "price"=>"16850.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2021/04/18/13/26/71/94/8/item_XL_132671948_bc5546c876c02.jpg"
            ], [
                "name"=>"HP OMEN 15-dh1070wm Gaming Laptop - 10th Generation Intel Core i7-10750H,  8 GB RAM, 1TB + 256 GB SSD, NVIDIA GeForce GTX 1660 Ti  6 GB GDDR6 Graphics, 15.6 Inch FHD IPS 300 nits,  4-zone RGB backlit  keyboard,  Windows 10 - Black (OMEN Mouse & Headset)",
                "description"=>"Description:
Computer CPU Manufacturer : IntelExternal Product ID : 195122428761Model Number : 15-dh1070wmHard Disk Interface : PCIe & Serial ATAProcessor Speed (GHz) : 2.6 GHzHardware Platform : windowsProcessor Type : Core i7 (10th Generation)USB : SuperSpeed USB Type-C 3 SuperSpeed USB Type-A 1 RJ-45 1 Mini DisplayPort 1 HDMI 2.0aBrand : HPVideo Controller Manufacturer : NVIDIALaptop Family : ...",
                "price"=>"20999.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2021/03/03/13/24/51/22/9/item_XL_132451229_57aa151b630b9.jpg"
            ], [
                "name"=>"Lenovo Ideapad L340-15IRH Gaming Laptop - Intel Core i7-9750H, 15.6 Inch FHD, 1TB SSD, 16 GB RAM, NVIDIA GeForce GTX 1650 4GB, DOS - Granite Black",
                "description"=>"Description:
Brand: Lenovo
Dimensions: 363 x 254.6 x 23.9 mm
Weight: 2.19kg
Software
Operating system: DOS
Hard drive
Hard Disk Capacity: 1 TB
Hard Disk Interface: SSD
Memory (RAM)
Memory capacity: 16GB
Processor
9th Generation Intel Core i7 Processor
Processor Number:  i7-9750H
Number of Cores: 6
Max Turbo Frequency: 4.5GHz
Screen
15.6 inches FHD (1920x1080) IPS 250nits Anti-glare
...",
                "price"=>"16777.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2021/03/04/13/24/56/16/4/item_XL_132456164_f88000ad6243d.jpg"
            ], [
                "name"=>"Dell G5 15-5505 Gaming Laptop - Ryzen 7 4800H 8-core, 16GB RAM , 512GB SSD, AMD RX 5600M 6GB Graphics card, 15.6 Inch FHD IPS 144Hz,  4-Zone RGB Backlit Keyboard, Windows 10 - Silver",
                "description"=>"Description:
Brand : DellHardware Platform : windowsColor : SilverOperating System Type : Windows 10Hard Disk Capacity : 512 GBScreen Size Range : 15 - 15.9 inchesProcessor Type : Ryzen 7 4800HUSB : USB 3.1Hard Disk Interface : PCIeDisplay Size (Inch) : 15.6 inchesMemory Card Reader : YesRAM Size : 16 GBProcessor Family : AMD RyzenNumber of Processor Core : Octa CoreVideo Controller Manufacturer : ...",
                "price"=>"20599.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2020/11/22/13/21/07/54/0/item_XL_132107540_f1904e4545491.jpg"
            ], [
                "name"=>"HP Pavilion 15-dk1035ne Gaming laptop - 10th Gen Intel Core i7-10750H, 16 GB RAM, 1TB HDD and 256GB SSD,  NVIDIA GeForce GTX 1660TI  6 GB GDDR6  Graphics, 15.6 inch FHD IPS, backlit keyboard, Dos - Shadow black",
                "description"=>"Description:
Brand : HPHardware Platform : dosColor : BlackOperating System Type : DOSHard Disk Capacity : 1.256 TBScreen Size Range : 15 - 15.9 inchesProcessor Type : Core i7 (10th Generation)USB : 1 SuperSpeed USB Type-C, 1 SuperSpeed USB Type-A (HP Sleep and Charge), 2 SuperSpeed USB Type-A, 1 HDMI 2.0 & 1 RJ-45Hard Disk Interface : PCIe & Serial ATADisplay Size (Inch) : 15.6 inchesMemory Card ...",
                "price"=>"18988.0",
                "image"=>"https://cf3.s3.souqcdn.com/item/2020/11/10/13/19/58/05/3/item_XL_131958053_3804849637f70.jpg"
            ], [
                "name"=>"MSI GF65 Thin Gaming Laptop, 15.6 inch Full HD 120 Hz IPS Display, Intel i7-10750H 10th Gen with 6 Cores, nVidia GTX 1660Ti 6GB GDDR6, 8GB DDR4, 512GB NVMe SSD, English Backlit Keyboard, Windows 10 Home, Black",
                "description"=>"Description:
Computer CPU Manufacturer : MSIExternal Product ID : 824142220177Hard Disk Interface : solid_state_driveProcessor Speed (GHz) : 2.6 Up To 5.0 GHZModel Number : 10SDR-645Hardware Platform : windowsProcessor Type : Core i7 (10th Generation)USB : USB 3.2 & Type C USBBrand : MSILaptop Family : LaptopVideo Controller Manufacturer : NVIDIAGraphics Card Capacity : 6 GBMemory Card Reader : ...",
                "price"=>"17999.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2021/02/03/13/23/40/12/3/item_XL_132340123_8450114cf7723.jpg"
            ], [
                "name"=>"HP OMEN 17-cb1072nr Gaming laptop - 10th Gen Intel Core i7-10750H, 16 GB, 1TB HDD and 512GB SSD,  NVIDIA GeForce GTX 1660 Ti 6 GB GDDR6  Graphics, 17.3 inch FHD IPS  144 Hz 300 nits, 4-zone RGB backlit Keyboard, Windows 10 - Shadow black",
                "description"=>"Description:
Brand : HPHardware Platform : windowsColor : BlackOperating System Type : Windows 10Hard Disk Capacity : 1.512 TBScreen Size Range : 17 inches and upProcessor Type : Core i7 (10th Generation)USB : USB 2.0 & 3.0 & 3.1Hard Disk Interface : PCIe & Serial ATADisplay Size (Inch) : 17.3 inchesMemory Card Reader : YesRAM Size : 16 GBProcessor Family : Intel Core i7Number of Processor Core : Hexa ...",
                "price"=>"24399.0",
                "image"=>"https://cf5.s3.souqcdn.com/item/2020/10/05/13/18/77/11/7/item_XL_131877117_c3cdfef24192d.jpg"
            ], [
                "name"=>"Lenovo 81Y4010BED ideapad 15IMH05 Gaming 3 Laptop, 15.6 Inch FHD, 1TB HDD and 256GB SSD, 16 GB RAM, Intel Core i7-10750H, NVIDIA GeForce GTX 1650Ti 4GB Graphics, DOS - Onyx Black",
                "description"=>"Description:
Brand: Lenovo
Model number: 81Y4010BED
Color: Onyx Black
Dimensions: 359 x 249.6 x 24.9 mm
Weight: 2.2 kg
Performance:
Operating system: DOS
Processor: Intel Core i7
Processor details: Intel Core i7-10750H (2.6 Gigahertz, up to 5 GHz, Hexa Core)
Memory (RAM): 16 GB
RAM type: DDR4
Storage: 1TB HDD + 256 GB SSD
Graphics: NVIDIA GeForce GTX 1650Ti 4GB GDDR6
Camera: 720 p with ...",
                "price"=>"16499.0",
                "image"=>"https://cf4.s3.souqcdn.com/item/2021/02/04/13/23/45/15/1/item_XL_132345151_c7d0aabebadc9.jpg"
            ], [
                "name"=>"Dell G5 5500 Gaming Laptop, 15.6 inch Full HD 144 Hz IPS 300ni ts WVA Anti-Glare LED Backlit Display, Intel i7-10750H 10th Gen, nVidia RTX 2070 8GB GDDR6, 16GB DDR4-2933, 512GB PCIe NVMe SSD, Wi-Fi 6 AX, Bluetooth 5.1, English 4 Zone RGB Backlit Keyboard,",
                "description"=>"Description:
Computer CPU Manufacturer : DellExternal Product ID : 884116373019Hard Disk Interface : SSDProcessor Speed (GHz) : 2.6 Up To 5.0 GHZModel Number : DELL G5 5500Hardware Platform : windowsProcessor Type : Core i7 (10th Generation)USB : USB 2 & USB 3.2Brand : DellLaptop Family : LaptopVideo Controller Manufacturer : NVIDIAGraphics Card Capacity : 8 GBMemory Card Reader : YesKeyboard Languages ...",
                "price"=>"27499.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2020/10/22/13/19/46/58/8/item_XL_131946588_5fe47f795c081.jpg"
            ], [
                "name"=>"Dell Inspiron G5 5500 Gaming Laptop - Intel Core  i7-10750H, 15.6 inches, 512 SSD, 16 GB RAM, NVIDIA GeForce GTX 1650 4GB  - Black",
                "description"=>"Description:
Brand
Dell
Software
Operating system: Ubuntu
Hard drive
Hard Disk Capacity: 512SSD
Hard Disk Interface: SSD
Memory (RAM)
Memory capacity: 16GB
Type: DDR4
Processor
Intel Core i7-10750H Processor
Cache: 12 MB Smart Cache
Number of Cores: 6
CPU Frequency: 5GHz
Screen
Display: 15.6 inch
Touchscreen: No
Reading Instruments
Optical Drive: Without Optical Drive
Card Reader: ...",
                "price"=>"18500.0",
                "image"=>"https://cf1.s3.souqcdn.com/item/2020/11/17/13/20/76/48/6/item_XL_132076486_4d6ed5b736ed3.jpg"
            ],
        ];
        DB::table('products')->insert($products);


    }
}
