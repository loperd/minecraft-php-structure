<?php
declare(strict_types=1);

namespace Loper\Minecraft\Protocol\Map;

use Loper\Minecraft\Protocol\AbstractVersionProtocolMap;
use Loper\Minecraft\Protocol\ProtocolVersion;
use Loper\Minecraft\Protocol\ServerVersion;
use Loper\Minecraft\Protocol\Struct\JavaProtocolVersion;
use Loper\Minecraft\Protocol\Struct\JavaServerVersion;

/**
 * @template-extends AbstractVersionProtocolMap<JavaServerVersion>
 * @template-extends AbstractVersionProtocolMap<JavaProtocolVersion>
 */
final class JavaVersionProtocolMap extends AbstractVersionProtocolMap
{
	public static array $map = [
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W41A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_13W41B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W41B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_13W41B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W42A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_13W42B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W42B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_13W42B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W43A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_13W43A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W47A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W47B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W47C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W47D,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W47E,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W48A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W48B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_13W49A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_7_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_6_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_6_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_8,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_9,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_10_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_10_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_10_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_10_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_7_10,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W02A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W02B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W02C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W02C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W03A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W03B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W03B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W03B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W04A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W04A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W04B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W04B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W05A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W05B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W05B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W05B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W06A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W06B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W06B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W06B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W07A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W07A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W08A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W08A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W10A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W10C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W10B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W10C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W10C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W10C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W11A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W11B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W11B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W11B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W17A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W17A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W18A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W18B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W18B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W18B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W19A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W19A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W20A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W20B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W20B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W20B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W21A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W21A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W21B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W21B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W25A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W25A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W25B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W25B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W26A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W26A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W26B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W26B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W26C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W26C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W27A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W27B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W27B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W27B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W28A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W28A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W28B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W28B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W29A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W29B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W29B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W29B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W30A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W30B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W30B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W30B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W30C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W30C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W31A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W31A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W32A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W32A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W32B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W32B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W32C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W32C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W32D,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W32D,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W33A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W33A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W33B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W33B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W33C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W33C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W34A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W34A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W34B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W34B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W34C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W34C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_14W34D,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_14W34D,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_1_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_2_PRE_RELEASE7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_8,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_8_9,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_8_9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W31A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W31A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W31B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W31B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W31C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W31C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W32A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W32A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W32B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W32B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W32C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W32C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W33A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W33A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W33B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W33B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W33C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W33C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W34A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W34A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W34B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W34B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W34C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W34C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W34D,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W34D,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W35A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W35A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W35B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W35B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W35C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W35C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W35D,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W35D,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W35E,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W35E,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W36A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W36A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W36B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W36B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W36C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W36C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W36D,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W36D,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W37A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W37A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W38A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W38A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W38B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W38B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W39A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W39C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W39B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W39C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W39C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W39C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W40A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W40A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W40B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W40B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W41A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W41A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W41B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W41B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W42A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W42A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W43A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W43A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W43B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W43B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W43C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W43C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W44A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W44A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W44B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W44B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W45A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W45A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W46A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W46A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W47A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W47A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W47B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W47B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W47C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W47C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W49A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W49A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W49B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W49B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W50A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W50A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W51A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W51A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_15W51B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_15W51B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W02A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W02A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W03A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W03A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W04A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W04A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W05A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W05A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W05B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W05B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W06A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W06A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W07A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W07A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W07B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W07B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_1_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_1_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_1_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_1_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_1_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W14A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W15A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W15B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_3_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_3_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_3_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_3_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_9_4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_9_4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W20A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W20A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W21A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W21A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W21B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W21B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_10_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_10_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_10_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_10_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_10,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_10_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_10_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_10_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_10_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_10_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W32A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W32A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W32B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W32B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W33A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W33A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W35A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W35A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W36A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W36A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W38A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W38A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W39A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W39A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W39B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W39B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W39C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W39C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W40A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W40A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W41A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W41A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W42A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W42A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W43A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W44A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W44A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_16W44A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_11_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_11_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_11,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_11,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_16W50A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_11_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_11_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_11_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_11_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_11_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W06A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W06A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W13A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W13A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W13B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W13B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W14A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W14A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W15A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W15A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W16A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W16A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W16B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W16B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W17A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W17A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W17B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W17B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W18A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W18A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W18B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W18B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_PRE_RELEASE6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE6,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_PRE_RELEASE7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_PRE_RELEASE7,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W31A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W31A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_1_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_1_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_2_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_2_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_2_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_2_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_12_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_12_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W43A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W43A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W43B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W43B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W45A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W45A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W45B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W45B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W46A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W46A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W47A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W47A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W47B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W47B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W48A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W48A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W49A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W49A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W49B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W49B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_17W50A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_17W50A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W01A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W01A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W02A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W02A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W03A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W03A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W03B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W03B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W05A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W05A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W06A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W06A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W07A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W07A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W07B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W07B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W07C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W07C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W08A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W08A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W08B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W08B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W09A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W09A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W10A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W10A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W10B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W10B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W10C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W10C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W10D,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W10D,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W11A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W11A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W14A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W14A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W14B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W14B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W15A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W15A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W16A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W16A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W19A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W19A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W19B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W19B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W20A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W20A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W20B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W20B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W20C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W20C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W21A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W21A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W21B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W21B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W22A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W22A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W22B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W22B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W22C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W22C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE6,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE7,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE8,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE8,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE9,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE9,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_PRE_RELEASE10,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_PRE_RELEASE10,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W30A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W30A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W30B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W30B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W31A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W31A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W32A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W32A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W33A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W33A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_1_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_1_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_1_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_1_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_2_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_2_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_2_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_2_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_13_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_13_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W43A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W43A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W43B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W43B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W43C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W43C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W44A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W44A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W45A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W45A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W46A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W46A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W47A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W47A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W47B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W47B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W48A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W48A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W48B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W48B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W49A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W49A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_18W50A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_18W50A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W02A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W02A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W03A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W03A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W03B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W03B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W03C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W03C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W04A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W04A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W04B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W04B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W05A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W05A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W06A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W06A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W07A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W07A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W08A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W08A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W08B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W08B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W09A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W09A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W11A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W11A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W11B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W11B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W12A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W12A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W12B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W12B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W13A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W13A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W13B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W13B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W14A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W14A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W14B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W14B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_1_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_1_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_1_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_1_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_2_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_2_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_2_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_2_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_2_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_2_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_2_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_2_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_3_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_3_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_3_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_3_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_3_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_3_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_3_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_3_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE6,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_4_PRE_RELEASE7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_4_PRE_RELEASE7,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_14_3_COMBAT_TEST,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_14_3_COMBAT_TEST,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W34A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W34A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W35A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W35A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W36A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W36A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W37A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W37A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W38A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W38A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W38B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W38B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W39A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W39A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W40A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W40A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W41A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W41A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W42A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W42A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W44A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W44A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W45A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W45A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W45B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W45B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W46A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W46A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_19W46B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_19W46B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_PRE_RELEASE6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE6,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_PRE_RELEASE7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_PRE_RELEASE7,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_1_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_1_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_2_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_2_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_2_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_2_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_15_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_15_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_SNAPSHOT_20W06A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_SNAPSHOT_20W06A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W07A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W07A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W08A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W08A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W09A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W09A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W10A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W10A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W11A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W11A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W12A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W12A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W13A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W13A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W13B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W13B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W14A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W14A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W15A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W15A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W16A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W16A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W17A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W17A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W18A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W18A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W19A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W19A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W20A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W20A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W20B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W20B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W21A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W21A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W22A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W22A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_PRE_RELEASE6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE6,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_PRE_RELEASE7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE7,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_PRE_RELEASE8,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_PRE_RELEASE8,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W27A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W27A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W28A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W28A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W29A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W29A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W30A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W30A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_2_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_2_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_2_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_2_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_2_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_2_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_2_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_2_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_2_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_2_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_3_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_3_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_4_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_4_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_4_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_4_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_4_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_4_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_5_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_5_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_16_5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_16_5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST6,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST7C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST7B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST7C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST7C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST7C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST8,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST8C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST8B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST8C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_COMBAT_TEST8C,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_COMBAT_TEST8C,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W45A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W45A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W46A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W46A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W48A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W48A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W49A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W49A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_20W51A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_20W51A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W03A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W03A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W05A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W05A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W05B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W05B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W06A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W06A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W07A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W07A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W08A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W08A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W08B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W08B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W10A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W10A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W11A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W11A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W13A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W13A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W14A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W14A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W15A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W15A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W16A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W16A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W17A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W17A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W18A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W18A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W19A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W19A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W20A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W20A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_1_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_1_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_1_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_1_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_1_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_1_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_1_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_1_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_1_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_1_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_17_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_17_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W37A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W38A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W39A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W40A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W41A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W42A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_EXPERIMENTAL_SNAPSHOT_7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W43A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W37A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W37A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W38A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W38A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W39A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W39A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W40A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W40A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W41A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W41A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W42A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W42A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W43A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W43A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_21W44A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_21W44A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_PRE_RELEASE6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE6,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_PRE_RELEASE7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE7,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_PRE_RELEASE8,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_PRE_RELEASE8,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_RELEASE_CANDIDATE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_RELEASE_CANDIDATE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_RELEASE_CANDIDATE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_1_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_1_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_1_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_1_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_1_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_1_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_1_RELEASE_CANDIDATE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_1_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W03A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W03A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W05A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W05A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W06A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W06A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W07A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W07A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_2_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_2_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_2_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_2_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_2_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_2_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_2_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_2_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_18_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_18_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_DEEP_DARK_EXPERIMENTAL_SNAPSHOT_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_DEEP_DARK_EXPERIMENTAL_SNAPSHOT_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W11A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W11A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W12A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W12A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W13A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W13A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W14A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W14A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W15A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W15A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W16A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W16A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W16B,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W16B,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W17A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W17A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W18A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W18A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W19A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W19A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W24A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W24A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_1_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1_PRE_RELEASE6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_1_PRE_RELEASE6,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_1_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1_RELEASE_CANDIDATE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_1_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_2_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_2_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_2_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_2_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W42A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W42A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W43A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W43A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W44A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W44A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W45A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W45A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_22W46A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_22W46A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_3_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_3_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_3_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_3_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_3_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_3_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_3_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_3_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_3_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_3_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_3_RELEASE_CANDIDATE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_3_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W03A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W03A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W04A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W04A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W05A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W05A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W06A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W06A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W07A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W07A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_4_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_4_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_4_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_4_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_4_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_4_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_4_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_4_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_4_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_4_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_4_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_4_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_4_RELEASE_CANDIDATE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_4_RELEASE_CANDIDATE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_19_4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_19_4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W12A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W12A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W13A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W13A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W14A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W14A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W16A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W16A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W17A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W17A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W18A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W18A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_PRE_RELEASE5,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE5,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_PRE_RELEASE6,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE6,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_PRE_RELEASE7,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_PRE_RELEASE7,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_1_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_1_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W31A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W31A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W32A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W32A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W33A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W33A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_23W35A,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_23W35A,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_2_PRE_RELEASE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_2_PRE_RELEASE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_2_PRE_RELEASE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_2_PRE_RELEASE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_2_PRE_RELEASE3,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_2_PRE_RELEASE3,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_2_PRE_RELEASE4,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_2_PRE_RELEASE4,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_2_RELEASE_CANDIDATE1,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_2_RELEASE_CANDIDATE1,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_2_RELEASE_CANDIDATE2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_2_RELEASE_CANDIDATE2,
	    ],
	    [
	        self::VERSION => JavaServerVersion::JAVA_1_20_2,
	        self::PROTOCOL => JavaProtocolVersion::JAVA_1_20_2,
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
