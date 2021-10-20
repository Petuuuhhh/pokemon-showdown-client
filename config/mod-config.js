/* 
optional data:
customTiers - these are auto-detected by the script, but you can set them here to ensure they show up in the right order
excludeStandardTiers - set to true if you want only your custom tiers to show up for the format
*/
const ModConfigData = {
	ClientMods: {
		cleanslate: {
			excludeStandardTiers: true,
		},
		cleanslatemicro: {
			excludeStandardTiers: true,
		},
		csts: {
			customTiers: ['CS1', 'CSM', 'CS2'],
			excludeStandardTiers: true,
		},
		roulettemons: {
			excludeStandardTiers: true,
		},
		ccapm2020: {
			excludeStandardTiers: true,
		},
		fealpha: {
			excludeStandardTiers: true,
		},
		feuu: {
			excludeStandardTiers: true,
		},
		prism: {
			ignoreEVLimits: true,
			spriteGen: 2,
		},
		smashmodsmelee: {
			excludeStandardTiers: true,
		},
		random: {
			customTiers: ['Rand Sus', 'Rand'],
			excludeStandardTiers: true,
		},
		randomduo: {
			customTiers: ['Rand Duo Uber', 'Rand Duo'],
			excludeStandardTiers: true,
		},
		randommossy: {
			customTiers: ['Rand Mossy Uber', 'Rand Mossy'],
			excludeStandardTiers: true,
		},
	},
};
exports.ModConfigData = ModConfigData;
