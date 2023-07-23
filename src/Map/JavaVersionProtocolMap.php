<?php
declare(strict_types=1);

namespace Loper\Minecraft\Protocol\Map;

use Loper\Minecraft\Protocol\AbstractVersionProtocolMap;
use Loper\Minecraft\Protocol\ProtocolVersion;
use Loper\Minecraft\Protocol\ServerVersion;
use Loper\Minecraft\Protocol\Struct\JavaProtocolVersion;
use Loper\Minecraft\Protocol\Struct\JavaServerVersion;

final class JavaVersionProtocolMap extends AbstractVersionProtocolMap
{
	public static array $map = [
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W41A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_13W41B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W41B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_13W41B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W42A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_13W42B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W42B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_13W42B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W43A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_13W43A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W47A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W47B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W47C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W47D,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W47E,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W48A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W48B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_13W49A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_6_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_6_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_8,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_9,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_10_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_10_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_10_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_10_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_7_10,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W02A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W02B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W02C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W03A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W03B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W03B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W03B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W04A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W04A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W04B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W04B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W05A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W05B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W05B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W05B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W06A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W06B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W06B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W06B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W07A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W07A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W08A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W08A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W10A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W10C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W10B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W10C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W10C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W10C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W11A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W11B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W11B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W11B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W17A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W17A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W18A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W18B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W18B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W18B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W19A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W19A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W20A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W20B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W20B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W20B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W21A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W21A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W21B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W21B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W25A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W25A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W25B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W25B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W26A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W26A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W26B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W26B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W26C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W26C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W27A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W27B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W27B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W27B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W28A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W28A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W28B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W28B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W29A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W29B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W29B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W29B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W30A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W30B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W30B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W30B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W30C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W30C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W31A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W31A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W32A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W32A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W32B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W32B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W32C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W32C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W32D,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W32D,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W33A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W33A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W33B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W33B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W33C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W33C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W34A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W34A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W34B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W34B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W34C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W34C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_14W34D,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_14W34D,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_8,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_8_9,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W31A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W31A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W31B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W31B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W31C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W31C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W32A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W32A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W32B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W32B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W32C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W32C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W33A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W33A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W33B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W33B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W33C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W33C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W34A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W34A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W34B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W34B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W34C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W34C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W34D,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W34D,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W35A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W35A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W35B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W35B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W35C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W35C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W35D,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W35D,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W35E,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W35E,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W36A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W36A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W36B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W36B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W36C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W36C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W36D,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W36D,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W37A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W37A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W38A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W38A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W38B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W38B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W39A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W39C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W39B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W39C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W39C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W39C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W40A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W40A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W40B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W40B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W41A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W41A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W41B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W41B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W42A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W42A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W43A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W43A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W43B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W43B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W43C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W43C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W44A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W44A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W44B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W44B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W45A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W45A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W46A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W46A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W47A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W47A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W47B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W47B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W47C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W47C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W49A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W49A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W49B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W49B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W50A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W50A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W51A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W51A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_15W51B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_15W51B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W02A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W02A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W03A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W03A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W04A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W04A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W05A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W05A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W05B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W05B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W06A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W06A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W07A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W07A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W07B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W07B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_1_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_1_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_1_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_1_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_1_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W14A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W15A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W15B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_3_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_3_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_3_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_9_4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_9_4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W20A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W20A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W21A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W21A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W21B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W21B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_10_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_10_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_10_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_10_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_10,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_10_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_10_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_10_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_10_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_10_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W32A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W32A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W32B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W32B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W33A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W33A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W35A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W35A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W36A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W36A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W38A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W38A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W39A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W39A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W39B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W39B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W39C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W39C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W40A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W40A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W41A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W41A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W42A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W42A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W43A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W44A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W44A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_16W44A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_11_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_11_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_11,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_11,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_16W50A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_11_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_11_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_11_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_11_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_11_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W06A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W06A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W13A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W13A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W13B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W13B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W14A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W14A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W15A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W15A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W16A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W16A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W16B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W16B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W17A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W17A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W17B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W17B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W18A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W18A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W18B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W18B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_PRE_RELEASE6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE6,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_PRE_RELEASE7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE7,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W31A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W31A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_1_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_1_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_2_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_2_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_2_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_2_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_12_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_12_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W43A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W43A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W43B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W43B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W45A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W45A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W45B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W45B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W46A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W46A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W47A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W47A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W47B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W47B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W48A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W48A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W49A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W49A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W49B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W49B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_17W50A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_17W50A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W01A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W01A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W02A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W02A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W03A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W03A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W03B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W03B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W05A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W05A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W06A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W06A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W07A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W07A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W07B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W07B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W07C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W07C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W08A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W08A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W08B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W08B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W09A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W09A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W10A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W10A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W10B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W10B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W10C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W10C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W10D,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W10D,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W11A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W11A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W14A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W14A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W14B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W14B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W15A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W15A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W16A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W16A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W19A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W19A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W19B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W19B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W20A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W20A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W20B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W20B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W20C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W20C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W21A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W21A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W21B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W21B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W22A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W22A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W22B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W22B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W22C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W22C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE6,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE7,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE8,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE8,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE9,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE9,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_PRE_RELEASE10,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE10,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W30A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W30A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W30B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W30B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W31A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W31A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W32A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W32A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W33A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W33A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_1_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_1_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_1_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_1_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_2_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_2_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_2_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_2_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_13_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_13_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W43A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W43A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W43B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W43B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W43C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W43C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W44A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W44A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W45A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W45A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W46A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W46A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W47A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W47A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W47B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W47B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W48A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W48A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W48B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W48B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W49A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W49A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_18W50A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_18W50A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W02A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W02A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W03A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W03A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W03B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W03B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W03C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W03C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W04A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W04A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W04B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W04B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W05A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W05A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W06A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W06A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W07A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W07A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W08A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W08A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W08B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W08B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W09A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W09A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W11A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W11A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W11B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W11B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W12A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W12A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W12B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W12B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W13A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W13A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W13B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W13B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W14A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W14A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W14B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W14B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_1_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_1_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_1_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_1_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_2_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_2_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_2_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_2_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_2_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_2_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_2_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_2_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_3_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_3_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_3_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_3_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_3_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_3_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_3_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_3_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE6,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE7,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_14_3_COMBAT_TEST,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_14_3_COMBAT_TEST,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W34A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W34A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W35A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W35A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W36A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W36A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W37A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W37A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W38A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W38A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W38B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W38B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W39A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W39A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W40A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W40A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W41A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W41A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W42A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W42A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W44A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W44A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W45A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W45A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W45B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W45B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W46A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W46A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_19W46B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_19W46B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_PRE_RELEASE6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE6,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_PRE_RELEASE7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE7,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_1_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_1_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_2_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_2_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_2_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_2_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_15_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_15_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_SNAPSHOT_20W06A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_SNAPSHOT_20W06A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W07A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W07A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W08A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W08A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W09A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W09A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W10A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W10A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W11A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W11A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W12A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W12A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W13A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W13A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W13B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W13B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W14A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W14A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W15A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W15A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W16A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W16A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W17A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W17A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W18A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W18A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W19A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W19A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W20A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W20A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W20B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W20B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W21A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W21A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W22A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W22A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_PRE_RELEASE6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE6,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_PRE_RELEASE7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE7,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_PRE_RELEASE8,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE8,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W27A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W27A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W28A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W28A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W29A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W29A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W30A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W30A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_2_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_2_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_2_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_2_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_2_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_2_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_2_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_2_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_2_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_2_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_3_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_3_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_4_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_4_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_4_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_4_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_4_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_4_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_5_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_5_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_16_5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_16_5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST6,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST7C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST7B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST7C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST7C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST7C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST8,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST8C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST8B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST8C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_COMBAT_TEST8C,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_COMBAT_TEST8C,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W45A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W45A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W46A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W46A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W48A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W48A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W49A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W49A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_20W51A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_20W51A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W03A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W03A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W05A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W05A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W05B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W05B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W06A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W06A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W07A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W07A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W08A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W08A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W08B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W08B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W10A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W10A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W11A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W11A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W13A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W13A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W14A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W14A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W15A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W15A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W16A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W16A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W17A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W17A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W18A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W18A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W19A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W19A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W20A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W20A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_1_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_1_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_1_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_1_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_1_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_1_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_1_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_1_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_1_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_1_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_17_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_17_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W37A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W38A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W39A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W40A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W41A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W42A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W43A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W37A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W37A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W38A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W38A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W39A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W39A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W40A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W40A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W41A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W41A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W42A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W42A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W43A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W43A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_21W44A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_21W44A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_PRE_RELEASE6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE6,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_PRE_RELEASE7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE7,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_PRE_RELEASE8,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE8,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_RELEASE_CANDIDATE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_RELEASE_CANDIDATE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_RELEASE_CANDIDATE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_1_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_1_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_1_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_1_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_1_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_1_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_1_RELEASE_CANDIDATE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_1_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W03A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W03A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W05A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W05A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W06A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W06A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W07A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W07A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_2_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_2_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_2_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_2_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_2_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_2_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_2_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_2_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_18_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_18_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_DEEP_DARK_EXPERIMENTAL_SNAPSHOT_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_DEEP_DARK_EXPERIMENTAL_SNAPSHOT_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W11A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W11A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W12A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W12A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W13A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W13A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W14A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W14A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W15A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W15A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W16A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W16A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W16B,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W16B,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W17A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W17A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W18A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W18A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W19A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W19A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W24A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W24A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_1_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE6,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_1_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1_RELEASE_CANDIDATE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_1_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_2_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_2_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_2_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_2_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W42A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W42A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W43A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W43A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W44A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W44A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W45A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W45A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_22W46A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_22W46A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_3_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_3_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_3_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_3_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_3_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_3_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_3_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_3_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_3_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_3_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_3_RELEASE_CANDIDATE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_3_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W03A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W03A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W04A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W04A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W05A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W05A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W06A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W06A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W07A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W07A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_4_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_4_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_4_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_4_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_4_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_4_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_4_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_4_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_4_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_4_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_4_RELEASE_CANDIDATE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_4_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_4_RELEASE_CANDIDATE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_4_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_19_4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_19_4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W12A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W12A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W13A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W13A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W14A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W14A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W16A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W16A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W17A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W17A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_23W18A,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_23W18A,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_PRE_RELEASE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_PRE_RELEASE2,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE2,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_PRE_RELEASE3,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE3,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_PRE_RELEASE4,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE4,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_PRE_RELEASE5,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE5,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_PRE_RELEASE6,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE6,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_PRE_RELEASE7,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE7,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_1_RELEASE_CANDIDATE1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_1_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::INTERNAL => JavaServerVersion::JAVA_1_20_1,
	        self::EXTERNAL => JavaProtocolVersion::JAVA_1_20_1,
	    ],
	];


	public static function getMap(): array
	{
		return self::$map;
	}


	public static function getUnknownVersion(): ServerVersion
	{
		return JavaServerVersion::Unknown;
	}


	public static function getUnknownProtocol(): ProtocolVersion
	{
		return JavaProtocolVersion::Unknown;
	}
}
