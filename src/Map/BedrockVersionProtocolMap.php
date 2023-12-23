<?php
declare(strict_types=1);

namespace Loper\Minecraft\Protocol\Map;

use Loper\Minecraft\Protocol\AbstractVersionProtocolMap;
use Loper\Minecraft\Protocol\ProtocolVersion;
use Loper\Minecraft\Protocol\ServerVersion;
use Loper\Minecraft\Protocol\Struct\BedrockProtocolVersion;
use Loper\Minecraft\Protocol\Struct\BedrockServerVersion;

/**
 * @template-extends AbstractVersionProtocolMap<BedrockServerVersion>
 * @template-extends AbstractVersionProtocolMap<BedrockProtocolVersion>
 */
final class BedrockVersionProtocolMap extends AbstractVersionProtocolMap
{
	public static array $map = [
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_2_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_2_0_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_2_1_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_2_2_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_2_1_ALPHA2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_2_2_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_2_2_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_2_2_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_3_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_3_0_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_3_2_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_3_2_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_3_3_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_3_3_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_4_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_4_0_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_5_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_5_0_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_6_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_6_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_6_1_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_6_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_7_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_7_3_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_7_1_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_7_3_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_7_2_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_7_3_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_7_3_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_7_3_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_7_4_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_7_6_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_7_5_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_7_6_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_7_6_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_7_6_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_8_1_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_8_2_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA6,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA7,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA8,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA9,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA10,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA11,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_0_ALPHA11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA12,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_4_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_4_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_1_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_4_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_2_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_4_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_3_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_4_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_4_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_4_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_9_5_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_9_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA6,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA7,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA8,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA9,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_1_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_2_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_3_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_4_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_10_5_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_10_5_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA6,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA7,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA8,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA10,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA9,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA10,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA10,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA10,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA11,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA13,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA12,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA13,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA13,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_0_ALPHA13,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA14,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_11_1_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_11_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_12_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_12_0_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_12_1_ALPHA10,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_12_1_ALPHA13,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_12_1_ALPHA11,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_12_1_ALPHA13,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_12_1_ALPHA12,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_12_1_ALPHA13,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_12_1_ALPHA13,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_12_1_ALPHA13,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_13_0_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_13_0_ALPHA2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_13_0_ALPHA2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_13_0_ALPHA2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_13_0_ALPHA3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_13_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_13_0_ALPHA4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_13_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_13_0_ALPHA5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_13_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_13_0_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_13_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_13_1_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_13_1_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_13_2_ALPHA,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_13_2_ALPHA,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_0_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_0_ALPHA2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_0_ALPHA2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_0_ALPHA2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_0_ALPHA3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_0_ALPHA3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_0_ALPHA4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_0_ALPHA5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_0_ALPHA6,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_0_ALPHA6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_0_ALPHA7,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_REALMS4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_14_3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_14_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_REALMS1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_REALMS4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_REALMS2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_REALMS4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_REALMS4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_REALMS4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_0_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_0_ALPHA2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_0_ALPHA3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_1_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_8,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_8,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_6,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_8,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_7,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_8,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_8,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_8,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_9,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_10,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_15_10,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_90_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_16_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_15_90_1_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_16_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_16_0_ALPHA1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_16_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_16_0_ALPHA2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_16_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_16_0_ALPHA3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_16_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_16_0_ALPHA4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_16_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_16_0_ALPHA5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_0_16_0_ALPHA5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_16_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_0_17_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_16_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_0_17_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_0_16_2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_0_17_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_0_17_0_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_0_17_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_0_17_0_2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_0_17_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_0_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_0_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_0_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_0_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_0_2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_0_7,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_3_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_4_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_4_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_4_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_4_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_4_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_5_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_6_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_5_3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_6_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_5_11,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_6_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_6_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_0_6_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_0_6_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_6,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_7,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_8,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_0_9,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_0_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_0_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_1_0_5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_0_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_1_0_5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_0_3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_1_0_5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_0_4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_1_0_5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_0_5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_1_0_5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_0_8,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_1_0_8,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_0_9,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_ALPHA_1_1_0_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_1_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_1_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_1_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_1_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_1_2,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_3_0,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_ALPHA_1_1_3_1,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_1_3,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_1_4,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_1_5,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::POCKET_1_1_7,
	        self::PROTOCOL => BedrockProtocolVersion::POCKET_1_1_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_0_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_0_7,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_0_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_0_9,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_0_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_0_11,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_0_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_0_15,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_0_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_0_18,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_0_18,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_0_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_0_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_0_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_0_25,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_0_31,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_0_31,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_5_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_5_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_5_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_3_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_5_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_5_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_5_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_5_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_5_12,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_6_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_5_15,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_2_5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_5,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_2_5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_6_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_6_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_6,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_2_6_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_6_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_2_6_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_7,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_2_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_8,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_2_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_9,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_2_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_10_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_10_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_2_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_11,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_2_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_13_5,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_13_6,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_13,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_12,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_14,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_12,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_15,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_12,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_2_13_60,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_12,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_13_8,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_8,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_13_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_10,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_13_11,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_13_12,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_13_12,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_14_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_14_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_14_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_14_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_20_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_20_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_2_20_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_2_20_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_4_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_4_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_4_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_4_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_4_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_4_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_4_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_4_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_4_4,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_4_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_5_0_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_5_0_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_5_0_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_5_0_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_5_0_4,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_5_0_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_5_0_7,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_5_0_7,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_5_0_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_5_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_5_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_5_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_5_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_5_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_5_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_5_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_5_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_5_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_6_0_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_6_0_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_6_0_5,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_6_0_6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_6_0_6,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_6_0_6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_6_0_8,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_6_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_6_0_30,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_6_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_6_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_6_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_6_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_6_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_6_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_6_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_7_0_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_7_0_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_7_0_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_7_0_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_7_0_5,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_7_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_7_0_7,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_7_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_7_0_9,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_7_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_7_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_7_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_7_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_7_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_8_0_8,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_8_0_8,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_8_0_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_8_0_10,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_8_0_11,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_8_0_14,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_8_0_13,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_8_0_14,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_8_0_14,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_8_0_14,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_8_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_8_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_8_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_8_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_9_0_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_9_0_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_9_0_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_9_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_9_0_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_9_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_9_0_5,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_9_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_9_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_9_0,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_10_0_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_10_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_10_0_4,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_10_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_10_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_10_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_10_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_10_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_11_0_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_11_0_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_11_0_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_11_0_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_11_0_4,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_11_0_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_11_0_5,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_11_0_5,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_11_0_7,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_11_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_11_0_8,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_11_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_11_0_9,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_11_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_11_0_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_11_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_11_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_11_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_11_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_11_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_11_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_11_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_11_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_11_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_11_4,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_11_4,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_12_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_4,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_6,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_9,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_11,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_12,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_13,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_12_0_14,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_12_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_12_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_12_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_13_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_13_0_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_13_0_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_4,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_13_0_6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_5,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_13_0_6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_6,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_13_0_6,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_9,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_13_0_9,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_13,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_13_0_13,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_15,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_13_0_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_16,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_13_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_17,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_13_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_13_0_18,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_13_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_13_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_13_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_13_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_13_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_13_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_13_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_13_3,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_0_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_60,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_0_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_0_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_0_4,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_0_5,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_0_6,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_0_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_0_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_0_52,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_14_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_14_0_12,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_1_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_1_3,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_14_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_2_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_2_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_25_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_14_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_14_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_14_30_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_14_30,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_14_41,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_14_60,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_14_60,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_15_0_8,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_15_0_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_15_0_9,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_15_0_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_15_0_11,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_15_0_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_15_0_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_15_0_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_15_0_53,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_15_0_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_15_0_54,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_15_0_54,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_15_0_55,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_15_0_55,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_15_0_56,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_15_0_56,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_52,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_59,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_53,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_59,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_54,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_55,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_55,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_55,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_57,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_57,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_58,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_59,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_59,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_59,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_60,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_60,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_61,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_63,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_0_63,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_64,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_65,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_66,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_67,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_0_68,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_1_03,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_1_04,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_20_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_20_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_20_52,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_20_53,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_20_54,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_40,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_42,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_60,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_61,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_61,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_30_52,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_30_53,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_30_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_30_56,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_59,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_30_57,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_59,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_50,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_52,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_52,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_53,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_54,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_54,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_55,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_55,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_56,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_56,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_57,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_57,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_58,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_58,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_59,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_100_59,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_100_60,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_101,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_100,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_101,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_101,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_101,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_200_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_200_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_200_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_200_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_200_52,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_200_52,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_200_53,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_201,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_200_54,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_201,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_200_55,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_201,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_200_56,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_201,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_200_57,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_201,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_200,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_201,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_201,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_201,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_210_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_210_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_53,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_210_53,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_54,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_210_55,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_55,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_210_55,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_56,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_210_57,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_57,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_210_57,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_58,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_210,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_59,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_210,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_60,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_210,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_210_61,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_210,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_210,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_210,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_220_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_220_50,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_220_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_220_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_220_52,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_221,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_220,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_221,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_16_221,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_16_221,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_230_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_230_50,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_230_52,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_230_52,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_230_54,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_230_56,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_16_230_56,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_16_230_56,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_0_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_0_52,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_0_52,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_0_52,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_0_54,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_0_56,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_0_58,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_10_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_10_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_10_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_10_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_10_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_10_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_11,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_20_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_20_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_20_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_20_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_20_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_20_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_20_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_20_23,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_30_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_30_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_30_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_30_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_30_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_30_24,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_30_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_30_24,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_30_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_17_30_24,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_30_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_34,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_30,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_34,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_32,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_34,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_33,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_34,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_34,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_34,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_40_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_40_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_17_40_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_40,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_17_41,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_17_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_0_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_0_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_0_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_0_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_0_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_10_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_0_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_10_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_0_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_0_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_0_27,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_10_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_10_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_10_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_10_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_10_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_10_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_10_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_10_24,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_10_26,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_10_27,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_10_27,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_10_27,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_10_28,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_12,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_12,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_11,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_12,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_12,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_12,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_20_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_20_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_20_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_20_29,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_20_27,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_20_29,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_20_29,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_20_29,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_30_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_30_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_30_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_30_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_30_26,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_18_30_26,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_30_28,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_33,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_30_30,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_33,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_18_30_32,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_33,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_30,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_33,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_31,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_33,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_32,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_33,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_18_33,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_18_33,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_0_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_0_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_0_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_0_24,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_0_26,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_0_26,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_0_28,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_0_28,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_0_30,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_PREVIEW_1_19_0_68,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_0_32,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_PREVIEW_1_19_0_68,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_0_34,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_PREVIEW_1_19_0_68,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_PREVIEW_1_19_0_68,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_PREVIEW_1_19_0_68,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_2,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_2,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_10_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_10_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_10_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_10_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_10_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_10_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_10_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_10_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_11,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_11,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_20_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_20_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_20_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_20_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_20_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_20_23,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_20_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_30_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_30_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_30_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_30_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_30_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_30_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_30_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_30_25,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_PREVIEW_1_19_30_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_30_25,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_30_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_30_25,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_30,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_40_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_31,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_40_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_40_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_40_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_40_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_40_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_40_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_40_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_40_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_40_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_40,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_41,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_41,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_50_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_50_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_50_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_50_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_50_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_50_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_50_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_50_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_50,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_51,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_51,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_60_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_60_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_60_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_60_23,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_60_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_60_23,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_60_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_60_24,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_60_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_60_25,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_60_26,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_62,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_60_27,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_62,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_60,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_62,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_62,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_62,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_63,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_63,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_70_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_70_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_70_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_70_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_70_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_70_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_70_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_70_23,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_70_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_70_26,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_70_26,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_70_26,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_70,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_73,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_71,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_73,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_72,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_73,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_73,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_73,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_80_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_80_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_80_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_19_80_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_80_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_83,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_80_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_83,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_19_80_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_83,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_80,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_83,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_81,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_83,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_19_83,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_19_83,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_0_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_0_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_0_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_0_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_0_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_0_24,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_0_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_0_24,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_0_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_0_24,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_0_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_20_0,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_20_1,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_1,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_10_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_10_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_10_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_10_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_10_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_10_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_10_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_20_10,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_20_12,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_20_13,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_20_14,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_1_20_15,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_1_20_15,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_20_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_20_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_20_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_20_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_20_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_20_22,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_20_23,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_20_23,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_30_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_30_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_30_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_30_21,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_30_22,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_30_25,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_30_24,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_30_25,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_30_25,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_30_25,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_40_20,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_40_20,
	    ],
	    [
	        self::VERSION => BedrockServerVersion::BEDROCK_BETA_1_20_40_21,
	        self::PROTOCOL => BedrockProtocolVersion::BEDROCK_BETA_1_20_40_21,
	    ],
	];


	public static function getMap(): array
	{
		return self::$map;
	}


	public static function getUnknownVersion(): ServerVersion
	{
		return BedrockServerVersion::Unknown;
	}


	public static function getUnknownProtocol(): ProtocolVersion
	{
		return BedrockProtocolVersion::Unknown;
	}
}
