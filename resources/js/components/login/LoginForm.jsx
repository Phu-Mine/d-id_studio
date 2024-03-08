import React from "react";
import { GoogleOutlined, LockOutlined } from "@ant-design/icons";
import { Button, Card, Divider, Form, Input } from "antd"
import FormItemLabel from "antd/es/form/FormItemLabel";
import Paragraph from "antd/es/skeleton/Paragraph";


const LoginForm = () => {
    return (
        <Form>
            <Card title="Login" id="loginForm">
                <Input size='large' placeholder='Username/Email' itemType='email' name='username' className="input-user"/>
                <Input.Password size='large' placeholder='Password' name='password' className="input-user"/>
                <Button type="primary" block>Login</Button> <br />
                <Button type="link"><LockOutlined /> Forgot password?</Button>
                <Divider/>
                <p className="labelLoginOther">OR</p>
                <Button type="default" icon={<GoogleOutlined />} className="loginGG">
                    <a href="auth/redirect/google">Login with Google</a>
                </Button>
            </Card>

        </Form>
    )
}

export default LoginForm;