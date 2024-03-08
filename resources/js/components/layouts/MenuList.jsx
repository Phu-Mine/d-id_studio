import React, { useState } from 'react';
import { Menu } from 'antd';
import { AppstoreOutlined, MailOutlined, SettingOutlined } from '@ant-design/icons';
import { Link } from 'react-router-dom';
import SubMenu from 'antd/es/menu/SubMenu';

const MenuList = () => {
    const [current, setCurrent] = useState('home');
    const onClick = (e) => {
        setCurrent(e.key);
    };
    return (
        <Menu
            theme="dark" mode="horizontal"
            onClick={onClick} selectedKeys={[current]}
            style={{flex: 1, minWidth: 0}}
        >
            {/* <Menu.Item key="home">
                <Link to="/">Home</Link>
            </Menu.Item>
            <SubMenu title="Products" key="product">
                <Menu.Item key="product.api">
                    <Link to="/product/api">API</Link>
                </Menu.Item>
                <Menu.Item key="product.studio">
                    <Link to="/product/studio">AI Studio</Link>
                </Menu.Item>
                <Menu.Item key="product.addin">
                    <Link to="/product/addin">AddIn PPTX</Link>
                </Menu.Item>
            </SubMenu> */}
        </Menu>
    );
};
export default MenuList;