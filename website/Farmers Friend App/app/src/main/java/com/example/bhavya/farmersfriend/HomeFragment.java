package com.example.bhavya.farmersfriend;

import android.app.Fragment;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;

import com.example.bhavya.farmersfriend.R;

/**
 * Created by bhavya on 12/11/17.
 */

public class HomeFragment extends Fragment {

    View Home;
    ImageView pestcal;
    ImageView weath;
    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, @Nullable ViewGroup container, Bundle savedInstanceState) {
        Home = inflater.inflate(R.layout.home, container, false);

        pestcal = (ImageView)Home.findViewById(R.id.pestcal);

        pestcal.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                getFragmentManager().beginTransaction().replace(R.id.frame,new Calculator()).commit();

            }
        });

        weath = (ImageView)Home.findViewById(R.id.weath);
        return Home;
    }
}
