import React from "react";
import { Button, Menu } from "antd"
import { Header } from "antd/es/layout/layout"
import MenuList from "./MenuList";

const menuList = [
    {key: 1, label: 'Home'},
    {key: 2, label: 'Products'},
    {key: 3, label: 'AddIn'}
];



const HomeHeader = () => {
    return (
        <Header
            style={{
                display: 'flex',
                alignItems: 'center',
            }}
        >
            <div className="demo-logo" />
            <MenuList/>
            <Button type='dashed' style={{ fontWeight: 'bold' }}>Login</Button>
        </Header>
    )
}
export default HomeHeader;