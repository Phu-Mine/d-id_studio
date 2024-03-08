import React from 'react';
import ReactDOM from 'react-dom/client';
import { LaptopOutlined, NotificationOutlined, UserOutlined } from '@ant-design/icons';
import { Breadcrumb, Layout, Menu, Button, Flex, Card, Input, Form } from 'antd';
import MenuHeader from './HomeHeader';
import LoginForm from '../login/LoginForm';
import { BrowserRouter, Router, RouterProvider, Switch, createBrowserRouter } from 'react-router-dom';

const { Content, Footer, Sider } = Layout;

const router = createBrowserRouter([
    {
        path: '/products',
        element: <div>Products router</div>
    },
    {
        path: '/',
        element: <div>Home router</div>
    },
    {
        path: '/login',
        element: <LoginForm />
    }
]);

const App = () => {
    return (
        <div>
            <Layout>
                <MenuHeader />
                <Content style={{ padding: '0 48px', }} >
                    <Flex justify="center" align='center'>
                        <RouterProvider router={router} />
                    </Flex>
                </Content>
                <Footer
                    style={{
                        textAlign: 'center',
                    }}
                >
                    Make Video with AI
                </Footer>
            </Layout>
        </div>
    );
};

if (document.getElementById('root')) {
    const Index = ReactDOM.createRoot(document.getElementById("root"));

    Index.render(
        <React.StrictMode>
            <App />
        </React.StrictMode>
    )
}

const handleLoginBtn = () => {
    window.href = './login';
}

export default App;
