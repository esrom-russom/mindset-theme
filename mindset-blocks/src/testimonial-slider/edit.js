/**
 * Imports.
 */
import { __ } from '@wordpress/i18n';
import { InspectorControls, useBlockProps } from '@wordpress/block-editor';
import { PanelColorSettings } from '@wordpress/block-editor'; // Importing PanelColorSettings
import { PanelBody, PanelRow, ToggleControl } from '@wordpress/components';
import ServerSideRender from '@wordpress/server-side-render';
import { SwiperInit } from './swiper-init';

/**
 * Export.
 */
export default function Edit({ attributes, setAttributes }) {
    const { navigation, pagination, arrowColor, activeDotColor, inactiveDotColor } = attributes; // Destructure the new attributes

    // Create an object with the CSS custom properties
    const customStyles = {
        '--arrow-color': arrowColor,
        '--active-dot-color': activeDotColor,
        '--inactive-dot-color': inactiveDotColor,
    };

    // Swiper initialization
    const swiper = SwiperInit('.swiper', { navigation, pagination });

    return (
        <>
            <InspectorControls>
                <PanelBody title={__('Settings', 'testimonial-slider')}>
                    <PanelRow>
                        <ToggleControl
                            label={__('Navigation', 'testimonial-slider')}
                            checked={navigation}
                            onChange={(value) =>
                                setAttributes({ navigation: value })
                            }
                            help={__('Navigation will display arrows so users can navigate forward and backward.', 'testimonial-slider')}
                        />
                    </PanelRow>
                    <PanelRow>
                        <ToggleControl
                            label={__('Pagination', 'testimonial-slider')}
                            checked={pagination}
                            onChange={(value) =>
                                setAttributes({ pagination: value })
                            }
                            help={__('Pagination will display dots so users can navigate to any slide.', 'testimonial-slider')}
                        />
                    </PanelRow>
                    <PanelColorSettings
                        title={__('Arrow Color', 'testimonial-slider')}
                        colorSettings={[
                            {
                                value: arrowColor,
                                onChange: (value) => setAttributes({ arrowColor: value }),
                                label: __('Arrow Color', 'testimonial-slider'),
                            },
                        ]}
                    />
                    <PanelColorSettings
                        title={__('Pagination Colors', 'testimonial-slider')}
                        colorSettings={[
                            {
                                value: activeDotColor,
                                onChange: (color) => setAttributes({ activeDotColor: color }),
                                label: __('Active Dot Color', 'testimonial-slider'),
                            },
                            {
                                value: inactiveDotColor,
                                onChange: (color) => setAttributes({ inactiveDotColor: color }),
                                label: __('Inactive Dot Color', 'testimonial-slider'),
                            },
                        ]}
                    />
                </PanelBody>
            </InspectorControls>
        <div {...useBlockProps( {style: customStyles} )} attributes={attributes}>
                <ServerSideRender block="mindset-blocks/testimonial-slider" attributes={attributes} />
            </div>
        </>
    );
}
