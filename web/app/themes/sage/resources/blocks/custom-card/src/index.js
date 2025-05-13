import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import './style.css';

registerBlockType('theme/custom-card', {
  edit({ attributes, setAttributes }) {
    const { title, description } = attributes;
    const blockProps = useBlockProps();

    return (
      <div {...blockProps} className="custom-card-editor">
        <RichText
          tagName="h3"
          value={title}
          onChange={(value) => setAttributes({ title: value })}
          placeholder="Wpisz tytuł"
        />
        <RichText
          tagName="p"
          value={description}
          onChange={(value) => setAttributes({ description: value })}
          placeholder="Wpisz opis"
        />
      </div>
    );
  },

  save() {
    // zapis pusty — renderujemy wszystko przez PHP
    return null;
  },
});
