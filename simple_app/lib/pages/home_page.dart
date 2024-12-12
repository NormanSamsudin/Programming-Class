import 'package:flutter/material.dart';
import 'package:go_router/go_router.dart';
import 'package:simple_app/project/route/app_route_config.dart';
import 'package:simple_app/project/route/app_route_conts.dart';

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.blueGrey,
      appBar: AppBar(title: Text('home')),
      body: Column(
        mainAxisAlignment: MainAxisAlignment.center,
        crossAxisAlignment: CrossAxisAlignment.center,
        children: [
          Text('Home'),
          ElevatedButton(
              onPressed: () {
                GoRouter.of(context).pushNamed(MyAppRouteConst.aboutRouteName);
              },
              child: Text('About Page')),
          ElevatedButton(
              onPressed: () {
                GoRouter.of(context).pushNamed(MyAppRouteConst.aboutRouteName);
              },
              child: Text('Profile Page')),
          ElevatedButton(
              onPressed: () {
                GoRouter.of(context)
                    .pushNamed(MyAppRouteConst.contactRouteName);
              },
              child: Text('Contact Page')),
        ],
      ),
    );
  }
}
