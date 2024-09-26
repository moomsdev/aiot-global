import config from "@config";
import "@styles/admin";
import "@scripts/admin/custom_thumbnail_support.js";
import introJs from 'intro.js';

function startIntroForBlock(block) {
    const steps = [];
    block.querySelectorAll('[data-step]').forEach((element) => {
        const step = {
            element: element,
            intro: element.getAttribute('data-intro') || '',
        };
        steps.push(step);
    });
    introJs().setOptions({ steps }).start();
}

document.addEventListener('DOMContentLoaded', () => {
    const { subscribe, select } = wp.data;
    function addGuideListener(blockName, guideClass) {
        const blocks = document.querySelectorAll(`.wp-block[data-type="${blockName}"]`);
        blocks.forEach((block) => {
            const guideButton = block.querySelector(`.${guideClass}`);
            if (guideButton) {
                guideButton.addEventListener('click', () => {
                    startIntroForBlock(block);
                });
            }
        });
    }
    subscribe(() => {
        addGuideListener('carbon-fields/block-intro', 'intro-guide');
        addGuideListener('carbon-fields/block-service', 'service-guide');
    });
});
