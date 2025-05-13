import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';
import './index.css';

registerBlockType('myplugin/my-block', {
  edit() {
    const blockProps = useBlockProps();
    return <div {...blockProps}>Hello from editor 👋</div>;
  },
  save() {
    const blockProps = useBlockProps.save();
    return <div {...blockProps}>Hello from frontend 🌍</div>;
  },
});
